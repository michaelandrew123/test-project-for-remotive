<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function handleChat(Request $request)
    {
        $message = $request->input('message');
        $response = $this->detectIntent($message);

        return response()->json([
            'response' => $response,
        ]);
    }

    public function detectIntent($text = "hellow owrld")
    {
        $projectId = 'YOUR_PROJECT_ID';
        $sessionId = session()->getId();


        // dd($sessionId);
        
 


        // - Mechanical Turk
        // - Remotasks
        // - Telus
        // - Prolific
        // - UserTesting
        // - RWS Group
        // - Data Annotation
        // - DScout
        // - Cloud Research
        // - Cloud Connect
        // - Intellizoom
        // - remotive

        $languageCode = 'en-US';

        $client = new Client();

        $response = $client->post("https://dialogflow.googleapis.com/v2/projects/$projectId/agent/sessions/$sessionId:detectIntent", [
            'headers' => [
                'Authorization' => 'Bearer ' . env('DIALOGFLOW_ACCESS_TOKEN'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'queryInput' => [
                    'text' => [
                        'text' => $text,
                        'languageCode' => $languageCode,
                    ],
                ],
            ],
        ]);

        $body = json_decode((string) $response->getBody(), true);
        return $body['queryResult']['fulfillmentText'];
    }
}
