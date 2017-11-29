<?php

namespace App\Http\Controllers;

use App\CateModel;
use App\Http\Requests\ProductDetailRequest;
use App\ProductDetailModel;
use App\ProductModel;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function getAdd()
    {

        $data =ProductModel::select('id', 'name')->get()->toArray();
        // là lơi hiển thị form
        return view('BackEnd.productdetail.add', compact('data'));
    }


    public function postAdd(ProductDetailRequest $productDetailRequest){
        $product= new ProductDetailModel();

        $product->quantity = $productDetailRequest->quantily;
        $product->number = $productDetailRequest->number;
        $product->visit_number = $productDetailRequest->visit_number;
        $product->address = $productDetailRequest->address;
        $product->contentt = $productDetailRequest->contentt;
        $product->description = $productDetailRequest->description;
        $product->product_id = $productDetailRequest->sltParent;
        $product->save();
        return redirect()->route('BackEnd.productdetail.getList')->with(['flash_level'=>'success','flash_message'=>'success !! complate add detail ']);

    }

    public function getList(){
        $data = ProductDetailModel::select()->orderBy('id', 'DESC')->get()->toArray();
        $product= ProductModel::select('id','name');
        return view('BackEnd.productdetail.list', compact('data','product'));
    }

    public function getDelete($id){
        $detail= ProductDetailModel::find($id);
        $detail->delete($id);
        return redirect()->route('BackEnd.productdetail.getList')->with(['flash_level'=>'success','flash_message'=>'success !! delete ok']);

    }


    public function getEdit($id)
    {
        $detail= ProductModel::select('id', 'name')->get()->toArray();
        $product= ProductDetailModel::find($id);
        return view('BackEnd.productdetail.edit', compact('detail', 'product'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
            ['quantity'=>'required'],
            ['quantity.required'=>'please enter quantity']
        );
        $detail=[
        'quantity' => $request->quantity,
        'number' => $request->number,
        'visit_number' => $request->visit_number,
        'address' => $request->address,
        'contentt' => $request->contentt,
        'description' => $request->description,
        'product_id'=>$request->product_id,
        ];
        $save=ProductDetailModel::find($id)->update($detail);
        if($save) {
            return redirect()->route('BackEnd.productdetail.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !! complate add detail ']);
        }
        else{
            return redirect()->back();
        }
    }
}
