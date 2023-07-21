<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\xenditTrait;

class UserController extends Controller
{
    use xenditTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $balance = $this->balance();

        return view('pages.admin.user.index', compact(
            'balance'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $balance = $this->balance();

        return view('pages.admin.user.create', compact(
            'balance'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $balance = $this->balance();

        return view('pages.admin.user.show', compact(
            'balance'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $balance = $this->balance();

        return view('pages.admin.user.edit', compact(
            'balance'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
