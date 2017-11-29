<?php

namespace App\Http\Controllers;

use App\CateModel;
use App\Http\Requests\ProductRequest;
use App\Image;
use App\ImageModel;
use App\ProductModel;
use File;
use Input;
use App\Product;
// khi su dung ajax k dk dung Illuminate
//use Illuminate\Http\Request;
use Request;
use Auth;
//use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    public function getAdd()
    {

        $cate = CateModel::select('id', 'name', 'parentId')->get()->toArray();
        // là lơi hiển thị form
        return view('BackEnd.product.add', compact('cate'));
    }


    public function postAdd(ProductRequest $productrequest)
    {
        // hàm lấy tấm hình ra
        $file_name = $productrequest->file('fImages')->getClientOriginalName();
        //$file_name=$product_request->file('fImages')->getClientOriginalName();
        $product = new ProductModel();
        $product->name = $productrequest->txtName;
        $product->price = $productrequest->txtPrice;
        $product->discount = $productrequest->discount;
        $product->hot = $productrequest->hot;
        $product->image = $file_name;
        $product->user_id =1;// Auth::user()->id ; // 1 ;
        $product->cate_id = $productrequest->sltParent;
        $productrequest->file('fImages')->move('resources/upload/', $file_name);
        $product->save();
        // cần xó số sp id vừa thêm vào
        $product_id = $product->id;
        $if = $productrequest->fProductdetail;
        if($if)
        {
            foreach ($if as $file)
            {
                $product_image = new ImageModel();
                if(isset($file))
                {
                    $product_image->image=$file->getClientOriginalName();
                    $product_image->product_id=$product_id;
                    $file->move('resources/upload/detail/', $file->getClientOriginalName());
                    $product_image->save();
                }
            }
        }
        return redirect()->route('BackEnd.product.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !!  ok']);
    }

    // hien thi noi dung

    public function getList()
    {
        $data = ProductModel::select('id', 'name', 'price', 'cate_id', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
        return view('BackEnd.product.list', compact('data'));

    }


    public function getDelete($id)
    {
        $product_detail = ProductModel::find($id)->pimages->toArray();
        //dd($product_detail);
        foreach ($product_detail as $value) {
            //.$value ten file
            File::delete('resources/upload/detail/' . $value["image"]);
        }
        $product= ProductModel::find($id);
        File::delete('resources/upload/'. $product->image);
        $product->delete($id);
        return redirect()->route('BackEnd.product.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !! delete  ok']);
    }


    public function getEdit($id)
    {
        $cate= CateModel::select('id', 'name', 'parentId')->get()->toArray();
        $product= ProductModel::find($id);
        $product_image=ProductModel::find($id)->pimages;
        return view('BackEnd.product.edit', compact('cate', 'product', 'product_image'));
    }

    // xoa tam hinh
    // neu du lieu la ajax lay id va ten tam hinh ra
    public function getDeleteImg($id){
        if(Request::ajax()){
            // idhinh truyen qua tu ajax
            $idHinh=(int)Request::get('idHinh');
            // dua vao id tam hinh tim hinh
            $image_detail=ImageModel::find($idHinh);
            // co roi xoa
            if(!empty($image_detail)){
                $img='resources/upload/detail/'.$image_detail->image;
                if(File::exists($img)){
                    File::delete($img);
                }
                // xoa trong csdl
                $image_detail->delete();
            }
            // xoa xong tra ve 1 gia tri ben ajax xu ly
            return "Oke";
        }
    }

    // post san pham

    public function postEdit($id, Request $request){
        $product= ProductModel::find($id);
        $product->name = Request::input('txtName');
        $product->price = Request::input('txtPrice');
        $product->hot = Request::input('hot');
        $product->discount = Request::input('discount');
        $product->user_id =1;//Auth::user()->id; // 1 ;
        $product->cate_id = Request::input('sltParent');
        // duong dan tam hinh
        $img_curent='resources/upload/'.Request::input('img_curent');
        //Request::input('txtName')
        if(!empty(Request::file('fImages'))){
            //ten file
            $file_name=Request::file('fImages')->getClientOriginalName();
            // update
            $product->image=$file_name;
            // kiem tra file va di chuyen vao trong
            Request::file('fImages')->move('resources/upload/', $file_name);
            if(File::exists($img_curent)){
                File::delete('$img_curent');
            }
        }
        else{
            echo"no file";
        }
        $product->save();

        // update hinh anh phu

        if(!empty(Request::file('fEditDetail'))){
            foreach (Request::file('fEditDetail') as $file){
                $product_img= new ImageModel();
                if(isset($file)){
                    $product_img->image = $file->getClientOriginalName();
                    $product_img->product_id = $id;
                    $file->move('resources/upload/detail/',$file->getClientOriginalName());
                    $product_img->save();
                }
            }

        }
        return redirect()->route('BackEnd.product.getList')->with(['flash_level' => 'success', 'flash_message' => 'success !! add  ok']);
    }
}
