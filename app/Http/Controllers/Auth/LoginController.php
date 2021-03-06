<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * ログイン後の処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        // ログインしたら、ユーザー自身のプロフィールページへ移動
        return redirect('users/' . $user->id)->with('message','ログインしました');
    }

    /**
     * ユーザーをログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();

        // ログアウトしたら、トップページへ移動
        return $this->loggedOut($request) ?: redirect('/')->with('message','ログアウトしました');
    }

    // SNSログイン
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //Callback処理
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();
        $u = User::where(['email' => $socialUser->getEmail()])->first();
        if ($u) {
            Auth::login($u);
            return redirect('users/' . $u->id)->with('message','ログインしました');
        } else {
          $u = User::create([
              'name' => $socialUser->getNickname(),
              'email' => $socialUser->getEmail(),
              'password' => Hash::make($socialUser->getNickname()),
          ]);
          Auth::login($u);
          return redirect('users/' . $u->id)->with('message','ログインしました');
        }
    }
}
