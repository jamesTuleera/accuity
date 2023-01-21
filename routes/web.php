<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PublicController@welcome')->name('welcome');
Route::get('/about-us', 'PublicController@about')->name('about');
Route::get('/contact-us', 'PublicController@contactView')->name('contact');
Route::get('/countries', 'UtilityController@countries');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/user-profile', 'UserController@profileView')->name('users.profile');
    Route::get('/user-profile-store', 'UserController@profileViewS')->name('users.profile.store');
    Route::get('/change-password', 'UserController@passwordView')->name('users.changepassword');
    Route::post('/update-password', 'UserController@updatePass')->name('users.updatepass');
    Route::get('/payment-details', 'UserController@detailsView')->name('users.payment-details');
    Route::post('/load-payment-details', 'UserController@createUserDetails')->name('users.add-details');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'user']],  function() {
    Route::get('/', 'UserController@index')->name('users.user_dashboard');
    Route::get('/account-details', 'UserController@accountDetailsView')->name('users.account_details');
    Route::get('/notifications', 'UserController@notificationView')->name('users.notifications');
    Route::get('/support', 'UserController@supportView')->name('users.support');
    Route::get('/deposit', 'UserController@depositView')->name('users.deposit');
    Route::post('/deposit', 'UserController@deposit')->name('users.depositing');
    Route::get('/withdrawal', 'UserController@withdrawalView')->name('users.withdrawal');
    Route::POST('/withdrawal-action', 'UserController@withdrawal')->name('users.withdraw_action');
    Route::get('/account-transactions', 'UserController@transactions')->name('users.transactions');
    Route::POST('/update-btc-wallet', 'UserController@btcUpdateWallet')->name('users.btc_wallet');

    Route::get('/my-referrals', 'UserController@referralView')->name('users.referrals');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']],  function() {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/user-deposit-processing', 'Admin\AdminController@depositView')->name('admin.deposits');
    Route::POST('/deposit-processing', 'Admin\AdminController@depositProcessing')->name('admin.update_deposits');
    Route::get('/users', 'Admin\AdminController@usersView')->name('admin.users');
    Route::get('/withdrawal-request', 'Admin\AdminController@withdrawalView')->name('admin.withdrawal_request');
    Route::POST('/user-payment', 'Admin\AdminController@payments')->name('admin.payment');
    Route::POST('/user-payment-withdrawal', 'Admin\AdminController@withdrawalApproval')->name('admin.update_withdrawal');
    Route::GET('/create-payment-wallets', 'Admin\AdminWalletController@index')->name('admin.create_wallet');
    Route::POST('/create-admin-wallets', 'Admin\AdminWalletController@create')->name('admin.create_admin_wallet');
    Route::POST('/edit-admin-wallets', 'Admin\AdminWalletController@edit')->name('admin.edit_admin_wallet');
    Route::POST('/debit-admin-wallets', 'Admin\BalanceController@debit')->name('admin.debiting');
    Route::GET('/{did}/delete-admin-wallets', 'Admin\AdminWalletController@delete')->name('admin.delete_admin_wallet');
    Route::GET('/delete/{type}/{user_id}', 'Admin\AdminController@deleteUser')->name('admin.delete_user');


    Route::group(['prefix' =>'plans'], function(){
        Route::GET('/', 'Admin\PlansController@index')->name('admin.plans');
        Route::POST('/add', 'Admin\PlansController@add')->name('admin.add_plans');
        Route::GET('/delete/{id}', 'Admin\PlansController@delete')->name('admin.delete_plans');
        Route::POST('/edit', 'Admin\PlansController@edit')->name('admin.edit_plans');
    });

    Route::get('/users/{id}', 'Admin\AdminController@userDetails')->name('admin.user-details');


});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
