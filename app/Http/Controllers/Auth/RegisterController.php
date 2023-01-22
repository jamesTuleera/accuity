<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Notifications\RegistrationNotification;
use App\Notifications\WelcomeNotification;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Wallet;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'btc_address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // s
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'country' => $data['country'],
            'referal' => $data['ref_email'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Wallet::create([
            'user_id' => $user->id,
            'bonus' => 10,
            'btc_address' => $data['btc_address']
        ]);

        try {
            $user->notify(new WelcomeNotification($user));
            User::find(1)->notify(new RegistrationNotification($user));

        } catch (\Exception $th) {
            // throw $th;
        }
        // dd(true);

        // Mail::to($user->email)->send(new ContactUs($user->email));

        return $user;

        // return response()->json([
        //     'status' => true,
        //     'data' => $user,
        //     'message' => 'Your registration was successful'
        // ]);

    }
}

