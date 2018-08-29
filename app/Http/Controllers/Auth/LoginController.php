<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\AuthenticatesUser;
use App\LoginToken;

class LoginController extends Controller
{
    protected $auth;

    public function __construct(AuthenticatesUser $auth)
    {
        $this->auth = $auth;
    }

    public function create()
    {
        return view('login.create');
    }

    public function store()
    {
        $this->auth->invite();
        return 'Check your email';
    }

    public function auth(LoginToken $token)
    {
        $this->auth->login($token);

        return 'Welcome '.$token->user->name;
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
