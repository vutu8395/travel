<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Mail;
use Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');

    }


//    public function postLogin(Request $request)
//    {
//        $login=array(
//            'email'=>$request->email,
//            'password'=>$request->password,
//            'rule_id'=>1
//
//        );
//
//        if ($this->auth->attempt($login)){
//            return redirect()->route('BackEnd.cate.list');
//        }
//        else{
//            return redirect()->back();
//        }
//
//    }
//    public  function user(){
//        return view('pages.index');
//    }



    public function getContact(){

        return view('pages.home');
      }

    public function postContact(Request $request){
        // gui mail dung thu vien mail nhu sau, trang giao dien, send cho email voi du lieu data
        $data=[
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'receive'=>$request->sex
        ];

        $save= ContactModel::insert($data);
       // $save= new ContactModel();

//        $data=[
//            'name'=>Request::input('name'),
//            'phone'=>Request::input('phone'),
//            'email'=>Request::input('email'),
//            'address'=>Request::input('address'),
//            'receive'=>Request::input('sex'),
//        ];
        Mail::send('mail.blanck', $data, function($msg){
            $msg->from('mail.namstyle29@gmail.com','trong pham');
            $msg->to('mail.namstyle29@gmail.com', 'nam')->subject('day la noi dung mail');
            echo"<script>
				alert('cam on ban, chung toi se lien he lai cho ban trong thoi gian som nhat');
			window.location='".url('/')."'

			</script>";

        });
    }
}
