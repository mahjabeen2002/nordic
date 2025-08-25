<?php

namespace App\Http\Controllers;

use session;
use Exception;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class LinkedinController extends Controller
{

    public function linkedinRedirect(Request $request)
    {
        // Store the intended URL (the current URL) in the session
        $request->session()->put('url.intended', url()->previous());
    
        if (Auth::check()) {
            Auth::logout();
            session()->forget('avatar');
        }
        return Socialite::driver('linkedin-openid')->redirect();
    }
    

    public function linkedinCallback()
    {
        try {
            $user = Socialite::driver('linkedin-openid')->user();
            $linkedinUser = User::where('oauth_id', $user->id)->first();
            session(['avatar' => $user->avatar]);
    
            if ($linkedinUser) {
                Auth::login($linkedinUser);
            } else {
                $linkedinUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'linkedin',
                    'password' => encrypt('admin12345')
                ]);
    
                Auth::login($linkedinUser);
            }
    
            // Retrieve the intended URL from the session and redirect to it
            $intendedUrl = session('url.intended', '/');
            return redirect($intendedUrl);
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    
}
