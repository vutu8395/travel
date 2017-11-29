<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//class AuthController extends Controller
//{
//    public function getLogin()
//    {
//        return view('auth.login');
//    }
//
//
//    public function postLogin(Request $request)
//    {
//        $login=array(
//            'email'=>$request->email,
//            'password'=>$request->password,
//            'rule_id'=>1
//
//        );
//        // neu login đúng thì chuyển đến 1 trang bất kỳ
//        if (Auth::attempt($login)){
//            return redirect()->route('Back.cate.list');
//        }
//        // sai
//        else{
//            return redirect()->route('pages.index');
//
//        }
//    }
//
//    public function getLogout()
//    {
//        Auth::logout();
//        return redirect('auth/getLogin');
//    }
//}
