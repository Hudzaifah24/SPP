<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XenditController extends Controller
{
    public function balance() {
        $secret_key = 'Basic '.config('xendit.key_auth');

        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->get('https://api.xendit.co/balance');

        return $data_request;
    }
}
