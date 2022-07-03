<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Nexmo\Laravel\Facade\Nexmo;

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
        $message=[
            'required'=>'مطلوب',
            'digits'=>'رقم هاتف غير صحيح',
            'numeric'=>'رقم هاتف غير صحيح',
            'unique'=>'رقم هاتف مستخدم في حساب اخر',
            'max'=>'الحد المسموح 20 حرف',
            'min'=>'لايمكن ان تكون كلمة المرور اقل من 8 احرف',
            'confirmed'=>'كلمة المرور غير متطابقة',


        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:20'],
            'username' => ['required', 'digits:10', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],$message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   


        $codes=rand(100000,999999);
       $p= substr($data['username'], 1, 10);
       $nexmo=app('Nexmo\Client');
       $nexmo->message()->send([
         'to'=>'00962'.$p,
         'from'=>"HOT SNACK ",
         'text'=>' (New CODE ) =  ('.$codes.')' ,
     ]);


        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'code' => $codes,

        ]);

    }
}
