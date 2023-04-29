<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $googleUser->id)->first();
            if ($findUser) {
               Auth::login($findUser);
               return redirect()->route('/');
            } else {
               $newUser = User::create([
                  'name' => $googleUser->name,
                  'email' => $googleUser->email,
                  'google_id' => $googleUser->id,
                  'password' => encrypt('12345678')
               ]);
               Auth::login($newUser);
               return redirect()->route('/');
            }
         }catch(Exception $e) {
            
         }
    }
   
}
