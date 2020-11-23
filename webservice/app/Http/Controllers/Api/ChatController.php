<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\YodaBot\YodaBot;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function bot(Request $request, YodaBot $bot)
    {
        $token = $bot->getToken();
        $api = $bot->loadAPI();
        return response()->json(['api' => $token]);
    }
}
