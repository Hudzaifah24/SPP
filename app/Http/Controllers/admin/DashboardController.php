<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Traits\xenditTrait;
// use Xendit\Xendit;

class DashboardController extends Controller
{
    use xenditTrait;

    public function index() {
        $balance = $this->balance();

        return view('pages.admin.dashboard', compact(
            'balance'
        ));
    }
}
