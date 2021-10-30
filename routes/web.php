<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Hash;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('404', function () {
    return view('404');
});

//home route
Route::get('/', 'PageController@homeChart');

Route::get('login', function () {
    return view('login');
});


Route::resource('manage-chart', 'ChartController');


//chart route
Route::get('chart', 'PageController@chart');
Route::get('chart/goal', 'PageController@goalChart');
Route::get('chart/assist', 'PageController@assistChart');
Route::get('chart/clean-sheet', 'PageController@cleanSheetChart');

//prospective-members route
Route::get('prospective-members', 'PageController@prospectiveMembers');
Route::post('delete-prospective-members', 'PageController@deleteProspectiveMember');

//all members route
Route::get('all-members', 'PageController@allMembers');
//profile route
Route::get('profile/{username}', 'PageController@memberProfile');
Route::get('chart/{username}', 'PageController@memberChart');



//password reset
Route::get('forgot-password', 'ResetPasswordController@forgot_password');
// route to process forgot password email
Route::post('process-email', array('uses' => 'ResetPasswordController@forgot_password_process'));
Route::get('reset-password/{email}/{token}', 'ResetPasswordController@getPassword');
Route::post('reset-password-process', 'ResetPasswordController@resetPasswordProcess');



// route to login
Route::post('login', 'LoginController@login');

//logout route
Route::get('logout', array('uses' => 'LoginController@doLogout'));


//add new member route
Route::get('add-new-member', array('uses' => 'UserAccountController@addNewMember'));

Route::post('addmember', array('uses' => 'UserAccountController@add_new_member_process'));

//create account route
Route::get('create-account/{email}/{token}', array('uses' => 'UserAccountController@createAccount'));
Route::post('create-account-process', array('uses' => 'UserAccountController@createAccountProcess'));

//account settings route
Route::get('account-settings', array('uses' => 'UserAccountController@accountSettings'));
Route::post('account-settings-process', array('uses' => 'UserAccountController@accountSettingsProcess'));
Route::post('change-password-process', array('uses' => 'UserAccountController@changePassword'));

//member profile page route
Route::get('my-profile', array('uses' => 'UserAccountController@myProfile'));

Route::get('my-chart', array('uses' => 'UserAccountController@myChart'));








