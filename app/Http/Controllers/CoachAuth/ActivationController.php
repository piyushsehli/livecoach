<?php

namespace App\Http\Controllers\CoachAuth;

use App\User;
use App\CoachActivationToken;
use App\Mail\CoachConfirmationEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ActivationController extends Controller
{
    /**
     * Handle the Confirmation of user Email
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function confirmEmail($token)
    {
        $token = CoachActivationToken::where('token', $token)->first();

        if(!$token){
            alert()->info('Your Account has already been confirmed');

            return redirect('/');
        }

        $token->coach()->update([
            'verified' => true
        ]);

        $token->delete();

        Auth::guard('coach')->login($token->coach);

        alert()->success('you are now LoggedIn', 'Account Confirmed');

        return redirect()->route('home');

    }

    public function show()
    {
        return view('resendemail');
    }

    public function resend(Request $request)
    {

        $this->validate($request, [
            'email' => 'exists:users,email'
        ]);

        $user = User::where('email', $request->input('email'))->firstOrFail();
        if ($user->verified) {
            alert()->info('The user is already verified. Please login directly');
            return redirect('/login');
        }
        $user->with('activationToken')->get();

        $token = $user->activationToken;

        $email = new UserConfirmationEmail($user, $token);
        Mail::to($request->input('email'))->send($email);

        alert()->success('New Confirmation Email has been sent to you');

        return back();
    }
}
