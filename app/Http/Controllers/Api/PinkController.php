<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinkController extends Controller
{
    public function pink() {
        return response()->json([
            'status' => true,
            'providedError' => []
        ], 200);
    }
}
