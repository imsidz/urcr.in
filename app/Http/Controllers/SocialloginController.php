<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class SocialloginController extends Controller
{
    public function login($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $serviceUser = Socialite::driver($provider)->user();
        $email = $serviceUser->getEmail();

        if ($email) {
            $user = User::where('email', $email)->first();
            if ($user) {
                Auth::login($user);
            } else {
                $user = new User;
                $user->name = $serviceUser->getName();
                $user->username = $serviceUser->getId();
                $user->password = $serviceUser->getId();
                $user->email = $serviceUser->getEmail();
                $user->save();
                Auth::login($user);
            }
        }
        return redirect('/');
    }
}
