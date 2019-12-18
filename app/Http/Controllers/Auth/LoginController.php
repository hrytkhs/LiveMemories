<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Socialite;

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

    // SNS認証
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $data = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        //追加か更新
        if ($this->user->id) {
            $u = User::where('id', $this->user->id)->update(
                [$provider.'_id' => $data->getId()]
            );
        } else {
            $u = User::firstOrCreate([$provider.'_id' => $data->getId()], [
                $provider.'_id' => $data->getId(),
                'name' => $data->getName()
            ]);
            \Auth::login($u);
        }
        return redirect($this->redirectTo);
    }
}
