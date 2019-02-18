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


Route::get('/','PagesController@gettrangchu');
Route::get('/loaitin/{id}','PagesController@getloaitin');
Route::get('/theloai/{id}','PagesController@gettheloai');
Route::get('/{tieude}/{id}','PagesController@gettin');
Route::get('/dangnhap','PagesController@getdangnhap');
Route::post('/dangnhap','PagesController@postdangnhap');
Route::get('/dangxuat','PagesController@getdangxuat');
Route::get('/dangky','PagesController@getdangky');
Route::post('/dangky','PagesController@postdangky');
Route::post('/binhluan/{id}','PagesController@postbinhluan');
Route::group(['prefix'=>'admin','middleware'=>'quyenadmin'],function()
{
	Route::group(['prefix'=>'theloai'],function()
	{
		Route::get('danhsach','TheLoaiController@getdanhsach');
		Route::get('them','TheLoaiController@getthem');
		Route::post('them','TheLoaiController@postthem');
		Route::get('sua/{id}','TheLoaiController@getsua');
		Route::post('sua/{id}','TheLoaiController@postsua');
		Route::get('xoa/{id}','TheLoaiController@getxoa');
	});
	Route::group(['prefix'=>'loaitin'],function()
	{
		Route::get('danhsach','LoaiTinController@getdanhsach');
		Route::get('them','LoaiTinController@getthem');
		Route::post('them','LoaiTinController@postthem');
		Route::get('sua/{id}','LoaiTinController@getsua');
		Route::post('sua/{id}','LoaiTinController@postsua');
		Route::get('xoa/{id}','LoaiTinController@getxoa');
	});
	Route::group(['prefix'=>'tintuc'],function()
	{
		Route::get('danhsach','TinTucController@getdanhsach');
		Route::get('them','TinTucController@getthem');
		Route::post('them','TinTucController@postthem');
		Route::get('sua/{id}','TinTucController@getsua');
		Route::post('sua/{id}','TinTucController@postsua');
		Route::get('xoa/{id}','TinTucController@getxoa');
	});
	Route::group(['prefix'=>'user'],function()
	{
		Route::get('danhsach','UserController@getdanhsach');
		Route::get('them','UserController@getthem');
		Route::post('them','UserController@postthem');
		Route::get('sua/{id}','UserController@getsua');
		Route::post('sua/{id}','UserController@postsua');
		Route::get('xoa/{id}','UserController@getxoa');
	});
	Route::group(['prefix'=>'ajax'],function()
	{
		Route::get('loaitin/{id}','TinTucController@getloaitin');
	});
});