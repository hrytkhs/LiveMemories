<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialController extends Controller
{
    // SNSログイン
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //Callback処理
    public function handleProviderCallback($provider)
    {
        //ソーシャルサービス（情報）を取得
        $userSocial = Socialite::driver($provider)->stateless()->user();
        //emailで登録を調べる
        $user = User::where(['email' => $userSocial->getEmail()])->first();

        //登録（email）の有無で分岐
        if($user){

            //登録あればそのままログイン（2回目以降）
            Auth::login($user);
            return redirect('/');

        }else{

            //なければ登録（初回）
            $newuser = new User;
            $newuser->name = $userSocial->getName();
            $newuser->email = $userSocial->getEmail();
            $newuser->save();

            //そのままログイン
            Auth::login($newuser);
            return redirect('/');

        }
    }
}
