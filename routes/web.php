<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('user.index');
});

Route::get('/home2',function(){
    return view('user.home2');
});

Route::get('/home3',function(){
    return view('user.home3');
});

Route::get('/gridproducts',function(){
    return view('user.gridproducts');
});

Route::get('/gridproducts_leftsidebar',function(){
    return view('user.gridproducts_leftsidebar');
});

Route::get('/gridproducts_bannerslider',function(){
    return view('user.gridproducts_bannerslider');
});

Route::get('/listproducts',function(){
    return view('user.listproducts');
});

Route::get('/shoppingcart',function(){
    return view('user.shoppingcart');
});

Route::get('/checkout',function(){
    return view('user.checkout');
});

Route::get('/contact',function(){
    return view('user.contact');
});

Route::get('/404',function(){
    return view('errors.404');
});

Route::get('/login',function(){
    return view('user.login');
});

Route::get('/productdetails-fullwidth',function(){
    return view('user.productdetails-fullwidth');
});

Route::get('/productdetails-leftsidebar',function(){
    return view('user.productdetails-leftsidebar');
});

Route::get('/productdetails-rightsidebar',function(){
    return view('user.productdetails-rightsidebar');
});

Route::get('/bloggrid',function(){
    return view('user.bloggrid');
});

Route::get('/bloglist',function(){
    return view('user.bloglist');
});

Route::get('/bloglist-leftsidebar',function(){
    return view('user.bloglist-leftsidebar');
});

Route::get('/inblog_left-siderbar',function(){
    return view('user.inblog_left-siderbar');
});

Route::get('/inblog_right-siderbar',function(){
    return view('user.inblog_right-siderbar');
});

Route::get('/about',function(){
    return view('user.about');
});

Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin/data',[AdminController::class,'Users']);

Route::get('/admin/product',[AdminController::class,'Products']);

Route::get('/admin/posts',[AdminController::class,'Posts']);

Route::get('/admin/forms',[AdminController::class,'forms']);

Route::post('/register',[UserController::class,'create']);
Route::post('/updateUser/{id}',[UserController::class,'update']);
Route::get('/deleteUser/{id}',[UserController::class,'delete']);
Route::get('showUser/{id}',[UserController::class,'show']);

Route::get('/createNewProduct',[ProductController::class,'createNew']);
Route::post('/createProduct',[ProductController::class,'create']);
Route::post('/updateProduct/{id}',[ProductController::class,'update']);
Route::get('/deleteProduct/{id}',[ProductController::class,'delete']);
Route::get('showProduct/{id}',[ProductController::class,'show']);

Route::post('/createPost',[PostController::class,'create']);
Route::post('/updatePost/{id}',[PostController::class,'update']);
Route::get('/deletePost/{id}',[PostController::class,'delete']);
Route::get('showPost/{id}',[PostController::class,'show']);

Route::get('/admin/categories',[AdminController::class,'Categories']);
Route::post('/createCategory',[CategoryController::class,'create']);
Route::post('/updateCategory/{id}',[CategoryController::class,'update']);
Route::get('/deleteCategory/{id}',[CategoryController::class,'delete']);
Route::get('showCategory/{id}',[CategoryController::class,'show']);

Route::get('/admin/likes',[AdminController::class,'Likes']);
Route::get('/showLike/{id}',[LikeController::class,'show']);

Route::get('/admin/orders',[AdminController::class,'Orders']);
Route::get('/showOrder/{id}',[OrderController::class,'show']);


Route::get('/deleteCategory/{id}',[CategoryController::class,'delete']);
Route::get('/showCategory/{id}',[CategoryController::class,'show']);


Route::get('/admin/comments',[AdminController::class,'Comments']);
Route::get('/showComment/{id}',[CommentController::class,'show']);
Route::get('/deleteComment/{id}',[CommentController::class,'delete']);





