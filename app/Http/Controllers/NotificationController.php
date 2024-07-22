<?php

namespace App\Http\Controllers;

use App\Services\PushNotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $pushNotificationService;

    public function __construct(PushNotificationService $pushNotificationService)
    {
        $this->pushNotificationService = $pushNotificationService;
    }

    public function sendNotification(Request $request)
    {
        $title = $request->input('title');
        $msg = $request->input('msg');
        $token = $request->input('token');

        $response = $this->pushNotificationService->sendPushNotification($title, $msg, $token);

        $response = response()->json(['response' => $response]);

        return $response;
    }
}
