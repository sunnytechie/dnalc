<?php

namespace App\Http\Controllers\Api;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Models\Workshopapplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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


}
