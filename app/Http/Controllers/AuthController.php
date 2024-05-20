<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\FlashMessageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $flashMessageService;

    public function __construct(FlashMessageService $flashMessageService)
    {
        $this->flashMessageService = $flashMessageService;
    }


    public function login(Request $request)
    {

        $credentials  = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $this->flashMessageService->setMessage('success', 'Login successful');
            return redirect()->intended('dashboard');
        } else {
            $this->flashMessageService->setMessage('error', 'The provided credentials do not match our records.');
            return back();
        }
    }


    public function register(Request $request)
    {
        // dd($request);
        $fields = $request->validate([
            'username' => ['required', 'max:225'],
            'email' => ['required', 'email', 'unique:users'],
            'country' => ['min:4'],
            'password' => ['required', 'min:4']
        ]);

        $user = User::create($fields);

        $this->flashMessageService->setMessage('success', 'Student created successfully');

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login'); 

         


    }

}
