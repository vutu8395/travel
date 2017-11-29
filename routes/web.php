<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});


//Route::get('auth/getLogin', ['as'=>'getLogin', 'uses'=>'AuthController@getLogin']);
//Route::post('auth/postLogin',['as'=>'postLogin','uses'=>'AuthController@postLogin']);

Route::group(['middleware'=>'auth'], function (){
    // tat ca dg link nao nam trong nay deu dang nhap voi tk user rule=2;
    Route::get('/pages', 'BlogController@index');
    Route::Group(['middleware'=>'admin'], function (){
        // tat ca dg link nao muon vao admin dang nhap voi tai khoan rule=1;


        Route::get('/CheckAdmin', 'AdminController@index');
    });
});

Route::group(['prefix'=>'BackEnd', 'middleware'=>'admin'], function(){

    Route::group(['prefix'=>'cate'], function(){
//        lam viec voi category, them sua xoa, voi cac phuong thuc get post hoac any
        Route::get('/add', ['as'=>'BackEnd.cate.getAdd', 'uses'=>'CateController@getAdd']);
        Route::post('/add', ['as'=>'BackEnd.cate.postAdd', 'uses'=>'CateController@postAdd']);
        Route::get('/list', ['as'=>'BackEnd.cate.getList', 'uses'=>'CateController@getList']);
        Route::get('/delete/{id}', ['as'=>'BackEnd.cate.getDelete', 'uses'=>'CateController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'BackEnd.cate.getEdit', 'uses'=>'CateController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'BackEnd.cate.postEdit', 'uses'=>'CateController@postEdit']);
    });

    Route::group(['prefix'=>'product'], function(){
        Route::get('/add', ['as'=>'BackEnd.product.getAdd', 'uses'=>'ProductController@getAdd']);
        Route::post('/add', ['as'=>'BackEnd.product.postAdd', 'uses'=>'ProductController@postAdd']);
        Route::get('/list', ['as'=>'BackEnd.product.getList', 'uses'=>'ProductController@getList']);
        Route::get('/delete/{id}', ['as'=>'BackEnd.product.getDelete', 'uses'=>'ProductController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'BackEnd.product.getEdit', 'uses'=>'ProductController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'BackEnd.product.postEdit', 'uses'=>'ProductController@postEdit']);
        Route::get('/delimg/{id}', ['as'=>'BackEnd.product.getDeleteImg', 'uses'=>'ProductController@getDeleteImg']);
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('/add', ['as'=>'BackEnd.user.getAdd', 'uses'=>'UserController@getAdd']);
        Route::post('/add', ['as'=>'BackEnd.user.postAdd', 'uses'=>'UserController@postAdd']);
        Route::get('/list', ['as'=>'BackEnd.user.getList', 'uses'=>'UserController@getList']);
        Route::get('/delete/{id}', ['as'=>'BackEnd.user.getDelete', 'uses'=>'UserController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'BackEnd.user.getEdit', 'uses'=>'UserController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'BackEnd.user.postEdit', 'uses'=>'UserController@postEdit']);
    });

    Route::group(['prefix'=>'contact'], function(){
        Route::get('/add', ['as'=>'BackEnd.contact.getAdd', 'uses'=>'ContactController@getAdd']);
        Route::post('/add', ['as'=>'BackEnd.contact.postAdd', 'uses'=>'ContactController@postAdd']);
        Route::get('/list', ['as'=>'BackEnd.contact.getList', 'uses'=>'ContactController@getList']);
        Route::get('/delete/{id}', ['as'=>'BackEnd.contact.getDelete', 'uses'=>'ContactController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'BackEnd.contact.getEdit', 'uses'=>'ContactController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'BackEnd.contact.postEdit', 'uses'=>'ContactController@postEdit']);
    });

    Route::group(['prefix'=>'productdetail'], function(){
        Route::get('/add', ['as'=>'BackEnd.productdetail.getAdd', 'uses'=>'ProductDetailController@getAdd']);
        Route::post('/add', ['as'=>'BackEnd.productdetail.postAdd', 'uses'=>'ProductDetailController@postAdd']);
        Route::get('/list', ['as'=>'BackEnd.productdetail.getList', 'uses'=>'ProductDetailController@getList']);
        Route::get('/delete/{id}', ['as'=>'BackEnd.productdetail.getDelete', 'uses'=>'ProductDetailController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'BackEnd.productdetail.getEdit', 'uses'=>'ProductDetailController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'BackEnd.productdetail.postEdit', 'uses'=>'ProductDetailController@postEdit']);
    });

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usernd', 'HomeController@user')->name('usernd');
Route::get('/test', function (){
   return view('');
});

// gmail
Route::get('/contact', ['as'=>'getContact', 'uses'=>'HomeController@getContact']);
Route::post('/contact', ['as'=>'postContact', 'uses'=>'HomeController@postContact']);


