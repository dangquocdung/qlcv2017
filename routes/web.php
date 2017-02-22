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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/access-denied', function () {
    return view('access-denied');
});


// Auth::routes();
//
// Route::get('/home', 'HomeController@index');

Auth::routes();

// Route::group(['middleware' => ['web']], function() {

// Login Routes...
    // Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    // Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    // Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
    // Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    // Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
//     Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
//     Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
//     Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
//     Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
// });


Route::group(['prefix'=>'van-thu','middleware'=>'vanthuLogin'],function(){

  Route::get('/', 'GoiNhanVanBanController@index');
  Route::get('/tao-moi-van-ban', ['as' => 'tao-moi-van-ban', 'uses' =>'GoiNhanVanBanController@getTaoMoiVanBan']);
  Route::post('/tao-moi-van-ban', ['as' => 'post-tao-moi-van-ban', 'uses' =>'GoiNhanVanBanController@postTaoMoiVanBan']);

  Route::get('/van-ban-cho-goi', ['as' => 'van-ban-cho-goi', 'uses' =>'GoiNhanVanBanController@getVanBanChoGoi']);

  Route::delete('/delete-van-ban/{id}', ['as' => 'delete-van-ban', 'uses' =>'GoiNhanVanBanController@deleteVanBan']);

});

Route::group(['prefix'=>'chuyen-vien','middleware'=>'chuyenvienLogin'],function(){

  Route::get('/', 'HoSoCongViecController@index');

});

Route::group(['prefix'=>'truong-phong','middleware'=>'truongphongLogin'],function(){

  Route::get('/', 'TruongPhongController@index');

});

Route::group(['prefix'=>'lanh-dao','middleware'=>'lanhdaoLogin'],function(){

  Route::get('/', 'LanhDaoController@index');

});

Route::group(['prefix'=>'quan-tri','middleware'=>'quantriLogin'],function(){

  Route::get('/', 'QuanTriController@index');
  Route::put('/nguoi-dung/edit/{id}', ['as' => 'cap-nhat-thong-tin-nguoi-dung', 'uses' =>'QuanTriController@putNguoiDung']);

  Route::delete('/nguoi-dung/delete/{id}', ['as' => 'delete-nguoi-dung', 'uses' =>'QuanTriController@deleteNguoiDung']);


});
