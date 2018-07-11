<?php
use Illuminate\Http\Request;

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
Route::post('/send', function (Request $request) {

    $name = $request->fname;
    $email = $request->email;
    $title = $request->fname;
    $content = $request->massage;

    Mail::send('emails.content', ['name' => $name, 'email' => $email, 'title' => $title, 'content' => $content], function ($message) use($name, $email, $title, $content) {

        $message->to($email)->subject($title);
    });


return view('welcome');



});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    // Logining admins
    Route::get('login', 'AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\AdminLoginController@login');
    Route::post('logout', 'AdminAuth\AdminLoginController@logout')->name('admin.logout');

    // Password Reset Routes
    Route::post('password/email', 'AdminAuth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset', 'AdminAuth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset', 'AdminAuth\AdminResetPasswordController@reset');
    Route::get('password/reset/{token}', 'AdminAuth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //Settings
    Route::resource('settings', 'SettingsController')->only(['index', 'store']);

    // Profile
    Route::resource('profile', 'ProfileController');

    Route::get('{lang}', 'LocalizationController@set_locale');
});
