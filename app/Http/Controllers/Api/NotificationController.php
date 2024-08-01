<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        $notifications = Notification::orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'notifications' => $notifications
        ]);
    }
}
