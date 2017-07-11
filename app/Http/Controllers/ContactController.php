<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, User $user)
    {
        //
        return view('user.contact')->withUser($request->user());
    }
}
