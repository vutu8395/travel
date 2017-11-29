<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$this->auth->user()->isAdmin()){
            //session()->flash('key','nd');
//            return redirect('/login');
            return redirect('/usernd');
        }
        return $next($request);

//        if(Auth::check())
//        {
//            $user= Auth::user();
//            if($user->rule_id == 1)
//                return view('BackEnd.cate.list');
//            else
//               // return redirect('auth/getLogin');
//                return view('pages.index');
//        }
//        else
//            return view('pages.index');
//           // return redirect('auth/getLogin');
//
    }

}
