<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manager\UserManager;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    private $manager;
    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }
    public function auth()
    {
        // envoyer une requette a github
        //driver pour faire reference au service de git er redirect pour erte rediriger vers github
        return Socialite::driver('github')->redirect();
    }

    public function redirect()
    {
        // recevoir un requette de github
        $userInfo = Socialite::driver('github')->stateless()->user();

        // dd($userInfo);
        $user = User::firstOrCreate([
            'email' => $userInfo->email
        ],[
            'name' => $userInfo->nickname,
            'password' => Hash::make(Str::random(24)),
            'avatar'=> ($userInfo->avatar && !empty($userInfo->avatar))
                        ? $this->manager->uploadAvatar($userInfo)
                        : User::AVATAR
           
        ]
        
        );

        Auth::login($user);
        return redirect()->route('home');
         

    }
}
