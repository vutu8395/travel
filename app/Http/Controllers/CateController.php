<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateModel;
use App\Http\Requests\CateRequest;

class CateController extends Controller
{

    public function getAdd()
    {
        $parent = CateModel::select('id','name','parentId')->get()->toArray();
        return view('BackEnd.cate.add', compact('parent'));
    }

    public function postAdd(CateRequest  $request)
    {

        $cate = new CateModel();
        if(!empty($request->sltParent)){

            $cate=[
                'name' => $request->txtName,
                'parentId' => $request->sltParent,
                'type' => 1
            ];
            $save=CateModel::insert($cate);
            if($save){
                return redirect()->route('BackEnd.cate.getList')->with(['flash_level'=>'success','flash_message'=>'success !! complate add category ']);

            }
            else{
                return redirect()->back();
            }

        }
        else{

            $cate->name = $request->txtName;
            $cate->parentId =$request->sltParent;
            $cate->type = 0;
            $cate->save();
            return redirect()->route('BackEnd.cate.getList')->with(['flash_level'=>'success','flash_message'=>'success !! complate add category ']);
        }

    }

    public function getList()
    {
        $list = CateModel::select('id','name','parentId','type')->orderBy('id', 'DESC')->get()->toArray();
        return view('BackEnd.cate.list', compact('list'));
    }


    public function getDelete($id){
        $parent= CateModel::where('parentId', $id)->count();
        if($parent==0)
        {
            $cate= CateModel::find($id);
            $cate->delete($id);
            return redirect()->route('BackEnd.cate.getList')->with(['flash_level'=>'success','flash_message'=>'success !! delete ok']);
        }
        else{
            echo"<script type='text/javascript'>
                    alert('sorry ! you can not delete')
                    window.location='";
            echo route('BackEnd.cate.getList');
            echo"'
            </script>";
        }

    }
    public function getEdit($id){
        $data=CateModel::findOrFail($id)->toArray();
        $parent=CateModel::select('id', 'name', 'parentId')->get()->toArray();
        return view('BackEnd.cate.edit', compact('parent','data', 'id'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['txtName'=>'required'],
            ['txtName.required'=>'please enter name category']
        );

        $cate=[
            'name' => $request->txtName,
            'parentId' => $request->sltParent,
            'type' => $request->type];

        $save= CateModel::find($id)->update($cate);

        if($save) {
            return redirect()->route('BackEnd.cate.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !! complate edits category ']);
        }
        else{
            return redirect()->back();
        }

    }
}
