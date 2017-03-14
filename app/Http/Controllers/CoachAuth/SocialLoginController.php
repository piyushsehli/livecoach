<?php

namespace App\Http\Controllers\CoachAuth;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:coach']);
    }


    // Facebook
    public function facebookRedirect(Request $request)
    {
        return Socialite::driver('facebook')->redirect();

    }

    public function facebookCallback(Request $request)
    {

        $serviceUser = Socialite::driver('facebook')->user();

        $user = $this->getExistingUser($serviceUser);

        if(!$user){
            $name = explode(' ', $serviceUser->getName());

            $user = User::create([
                "name" => $serviceUser->getName(),
                "email" => $serviceUser->getEmail(),
                // "verified" => true,
            ]);

            $user->save();
            alert()->success('Welcome, You have Successfully registered');

        }

        Auth::login($user, false);

        return redirect()->intended();
    }

    // Google

    public function googleRedirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        $serviceUser = Socialite::driver('google')->user();

        $user = $this->getExistingUser($serviceUser);

        if(!$user){
            $user = User::create([
                "name" => $serviceUser->getName(),
                "email" => $serviceUser->getEmail(),
                // "verified" => true,
            ]);

            $user->save();
            alert()->success('Welcome, You have Successfully registered');

        }

        Auth::login($user, false);

        return redirect()->intended();
    }

    //Helper functions 
    protected function getExistingUser($serviceUser)
    {
        return User::where('email', $serviceUser->getEmail())->first();
    }

}
