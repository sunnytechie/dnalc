<?php

namespace App\Services;

use GuzzleHttp\Client;
use Firebase\JWT\JWT;

class PushNotificationService
{
    private $client;
    private $credentials;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->credentials = [
            'type' => env('GOOGLE_SERVICE_ACCOUNT_TYPE'),
            'project_id' => env('GOOGLE_SERVICE_ACCOUNT_PROJECT_ID'),
            'private_key_id' => env('GOOGLE_SERVICE_ACCOUNT_PRIVATE_KEY_ID'),
            'private_key' => env('GOOGLE_SERVICE_ACCOUNT_PRIVATE_KEY'),
            'client_email' => env('GOOGLE_SERVICE_ACCOUNT_CLIENT_EMAIL'),
            'client_id' => env('GOOGLE_SERVICE_ACCOUNT_CLIENT_ID'),
            'auth_uri' => env('GOOGLE_SERVICE_ACCOUNT_AUTH_URI'),
            'token_uri' => env('GOOGLE_SERVICE_ACCOUNT_TOKEN_URI'),
            'auth_provider_x509_cert_url' => env('GOOGLE_SERVICE_ACCOUNT_AUTH_PROVIDER_X509_CERT_URL'),
            'client_x509_cert_url' => env('GOOGLE_SERVICE_ACCOUNT_CLIENT_X509_CERT_URL')
        ];
    }

    public function sendPushNotification($title, $msg, $token)
    {
        $jwt = $this->createJwt();
        $accessToken = $this->fetchAccessToken($jwt);

        $url = 'https://fcm.googleapis.com/v1/projects/' . $this->credentials['project_id'] . '/messages:send';
        $message = [
            'message' => [
                'token' => $token,
                'notification' => [
                    'title' => $title,
                    'body' => $msg
                ]
            ]
        ];

        $response = $this->client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ],
            'json' => $message
        ]);

        return $response->getBody()->getContents();
    }

    private function createJwt()
    {
        $now = time();
        $claimSet = [
            'iss' => $this->credentials['client_email'],
            'scope' => 'https://www.googleapis.com/auth/firebase.messaging',
            'aud' => $this->credentials['token_uri'],
            'iat' => $now,
            'exp' => $now + 3600,
        ];

        $jwt = JWT::encode($claimSet, $this->credentials['private_key'], 'RS256');
        return $jwt;
    }

    private function fetchAccessToken($jwt)
    {
        $response = $this->client->post($this->credentials['token_uri'], [
            'form_params' => [
                'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                'assertion' => $jwt
            ]
        ]);

        $responseData = json_decode($response->getBody()->getContents(), true);
        return $responseData['access_token'];
    }
}
