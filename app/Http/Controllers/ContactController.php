<?php

namespace App\Http\Controllers;

use App\ContactModel;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getAdd(){
        return view('BackEnd.contact.add');

    }
    public function postAdd(ContactRequest $contactRequest){

        // goi model
        $contact= new ContactModel();
        $contact->name=$contactRequest->name;
        $contact->address=$contactRequest->address;
        $contact->phone=$contactRequest->phone;
        $contact->email=$contactRequest->email;
        $contact->receive=$contactRequest->sex;
        $contact->save();
        //return redirect()->back();
        return redirect()->route('BackEnd.contact.getList')->with(['flash_level' => 'success', 'flash_message' => 'thanks contact as with you in time The earliest']);
    }

    public function getList(){
        $data = ContactModel::select()->orderBy('id', 'DESC')->get()->toArray();
        return view('BackEnd.contact.list', compact('data'));
    }

    public function getDelete($id){

        $contact= ContactModel::find($id);
        if($contact){
            $contact->destroy($id);
            return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'success !! delete ok']);
        }
    }

    public function getEdit($id){

        $data= ContactModel::find($id);
        return view('BackEnd.contact.edit',compact('data'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,
            ['name' => 'required'],
            ['name.required' => 'pleas enter name']
        );

        $contact=[
            'name' => $request->name,
            'address'=>$request->address,
            'phone'    => $request->phone,
            'email'   =>$request->email,
            'receive'=>$request->sex
        ];
        $save=ContactModel::find($id)->update($contact);
        if($save){
            return redirect()->route('BackEnd.contact.getList')->with(['flash_level'=>'success','flash_message'=>'success !! edit add contact ']);
        }
        else{
            return redirect()->back();
        }

    }

}
