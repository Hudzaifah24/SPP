<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait xenditTrait
{
    public $secret_key;

    public function secret_key() {
        return $this->secret_key = 'Basic '.config('xendit.key_auth');
    }

    protected function balance() {
        $data_request = Http::withHeaders([
            'Authorization' => $this->secret_key()
        ])->get('https://api.xendit.co/balance');

        return $data_request;
    }
}
