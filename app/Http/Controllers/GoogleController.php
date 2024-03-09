<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback(){
        try {
            $googleUser = Socialite::driver('google')->user();

            // Only allow users to log in with google
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google authentication failed. Please try again.');
        }

        $user = User::where('email', $googleUser->email)->orWhere('google_id', $googleUser->getId())->first();

        if(!$user) {
            $user =  User::create([
                'firstname' => $googleUser->name,
                'lastname' => $googleUser->name,
                'email' => $googleUser->email,
                'password'=> null,
                'google_id'=> $googleUser->getId(),
            ]);
        }else {
            if(!$user->google_id) {
                $user->update(['google_id' =>  $googleUser->getId()]);
            }
        }
        // Log in the user.
        Auth::login($user, true);

        return redirect()->route('dashboard');

    }
}
