<?php

namespace App\Http\Controllers\Api;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Models\Workshopapplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CourseScreenController extends Controller
{
    public function recommendedCourses(){
        $workshops = Workshop::select('id', 'title', 'note', 'fee', 'type', 'start_date', 'end_date', 'flyer', 'created_at')
                    ->orderBy('id', 'DESC')
                    ->take(5)
                    ->get();
        $workshops = $workshops->shuffle();

        foreach ($workshops as $workshop) {
            $workshop->details = $workshop->note;
            $workshop->makeHidden('note');
        }

        return response()->json([
            'status' => true,
            'recommendedCourses' => $workshops,
        ]);
    }

    public function userCourses(){
        $workshopApplications = Workshopapplication::select('id', 'workshop_id')->with('workshop')
                                ->where('email', Auth::user()->email)
                                ->orderBy('id', 'DESC')
                                ->get();

        return response()->json([
            'status' => true,
            'courses' => $workshopApplications
        ]);
    }

    public function apply(Request $request, $id) {
        $workshop = Workshop::find($id);

        if (!$workshop) {
            return response()->json([
                'status' => false,
                'error' => 'Workshop not found'
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'tx_reference' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        try {
            $apply = new Workshopapplication();
            $apply->fullname = Auth::user()->name;
            $apply->email = Auth::user()->email;
            $apply->workshop_id = $id;
            $apply->reference = $request->tx_reference;
            $apply->save();

            return response()->json([
                'status' => true,
                'message' => 'Application successful'
            ], 201);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'error' => 'An Error occured'
            ], 500);
        }



    }


}
