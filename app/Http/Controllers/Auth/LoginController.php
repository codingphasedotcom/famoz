<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Auth;

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
    protected $redirectTo = '/choose-account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        function generateUsername($length = 25) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $providerUser = Socialite::driver($provider)->user();
        //google
        if($provider == 'google'){
            $user = User::where('provider_id', $providerUser->getId())->first();
            if(!$user){
                $user = User::create([
                'email' => $providerUser->getEmail(),
                'full_name' => $providerUser->getName(),
                'image_url' => $providerUser->getAvatar(),
                'username' => generateUsername(12),
                'provider' => "google",
                'provider_id' => $providerUser->getId(),
            ]);
            }
        }
        //facebook
        if($provider == 'facebook'){
            $user = User::where('provider_id', $providerUser->getId())->first();
            if(!$user){
                $user = User::create([
                'email' => $providerUser->getEmail(),
                'full_name' => $providerUser->getName(),
                'image_url' => $providerUser->getAvatar(),
                'username' => generateUsername(12),
                'provider' => "google",
                'provider_id' => $providerUser->getId(),
            ]);
            }
        }
        
        Auth::login($user, true);
        
        if($user->account_types->contains($user->id) == false){
            return redirect('/choose-account');
        }

        return redirect('/');
        
        // return ;
        // $user->token;
    }
}
