<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginWithGoogleController extends Controller
{
     public function getGoogleRedirect()
    {
        #リダイレクトする
        return Socialite::driver('google')->redirect();
    }
    
    public function loginGoogleCallback()
    {
        #アカウントが登録されてある場合に実行
         $googleUser=Socialite::driver('google')->stateless()->user();
         $user=User::where('email',$googleUser->email)->first();
     
         if($user==NULL)
         {
             $user=$this->createUserByGoogle($googleUser);
         }
            Auth::login($user,true);
            return redirect('/');
    }
    
    public function createUserByGoogle($googleUser)
    {
        #登録されていないアカウントである場合に実行
        $user=User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => Hash::make(uniqid()),]);
            return $user;
    }
}
