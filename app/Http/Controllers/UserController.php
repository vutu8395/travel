<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    public function getAdd(){
        return view('BackEnd.user.add');
    }

    public function postAdd(UserRequest $userRequest)
    {
        $user = [
            'name' => $userRequest->txtUser,
            'password' => Hash::make($userRequest->txtPass),
            'email' => $userRequest->txtEmail,
            'remember_token' => $userRequest->_token,
            'rule_id' => $userRequest->sex,
        ];

        $save = User::insert($user);
        if ($save) {
            return redirect()->route('BackEnd.user.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !! you add ok']);
        } else {
            return redirect()->back()->with('key','you can not insert');
        }
    }

    public function getList(){
        //select
        //$user=['users']=User::all();
        $user['users']=User::select('id','name','email','rule_id')->orderBy('id','DESC')->get()->toArray();
        return view('BackEnd.user.list',$user);
    }

    public function getDelete($id)
    {
        // tao hien tai tro den id // $user_curent_login= Auth::user()->id;
        $user= User::find($id);
        // neu admin, hoac admin binh thuong
        //if(($id==2)||($user_curent_login !=2) && $user['level']==1)

        if($user['rule_id']==1)
        {
            return redirect()->route('BackEnd.user.getList')->with(['flash_level' => 'danger', 'flash_message' => 'sorry you cannot delete admin ']);
        }
        else
        {
            $user->delete($id);
            return redirect()->route('BackEnd.user.getList')->with(['flash_level' => 'success', 'flash_message' => 'success  delete !!  ok']);

        }
    }

    public function getEdit($id)
    {
        $data = User::find($id);
        // id khac 4 la khac subadmin->admin thuong, k sua dk subadmin ==9, va admin do k phai la chinh minh
        if((Auth::user()->id!=2)&&($id ==2 || ($data['rule_id']==1 && (Auth::user()->id!=$id))))
        {
            return redirect()->route('BackEnd.user.getList')->with(['flash_level' => 'danger', 'flash_message' => 'sorry you cannot edit ']);
        }
        else
        {
            return view('BackEnd.user.edit', compact('data', 'id'));
        }

    }


    public function postEdit($id, Request $request)
    {
        $user= User::find($id);

        if($request->input('txtPass'))
        {
            $this->validate($request,
                [
                    'txtRePass'=>'same:txtRePass'
                ],
                [
                    'txtRePass.same'=>'two pass dont match'
                ]);
            // tao bien pass de ma hoa;

            $pass=$request->input('txtPass');
            $user->password=Hash::make($pass);
        }
        //$user->name=$request->txtUser;
        $user->email=$request->txtEmail;
        $user->rule_id=$request->sex;
        $user->remember_token=$request->input('remember_token');
        $user->save();
        return redirect()->route('BackEnd.user.getList')->with(['flash_level' => 'success', 'flash_message' => 'success update !!  ok']);
    }

}
