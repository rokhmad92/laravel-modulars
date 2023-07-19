<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user::user', [
            'user' => $user
        ]);
    }
}
