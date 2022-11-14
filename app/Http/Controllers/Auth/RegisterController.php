<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/added';

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
            'username' => 'required|string|max:255|min:4',
            'mail' => 'required|string|email|max:255|unique:users|min:4',
            'password' => 'required|string|min:4|confirmed|alpha_num|max:12',
        ],[
            'username.required' => '名前は必須です',
            'username.max'=> '名前は255文字以内です',
            'username.min'=> '名前は4文字以上です',
            'mail.required' => 'メールは必須です',
            'mail.email' => 'メールアドレスを入力してください',
            'mail.max' => 'メールは255文字以内です',
            'mail.min'=> 'メールは4文字以上です',
            'mail.unique' => '登録済みのメールアドレスです',
            'password.required' => 'パスワードは必須です',
            'password.min'=> 'パスワードは4文字以上です',
            'password.confirmed' => 'パスワードが一致しません',
            'password.max' => 'パスワードは12文字以内です',
        ])->validate();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
        ]);
    }


    // public function registerForm(){
    //     return view("auth.register");
    // }

    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $this->validator($data);
            $this->create($data);
            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(){
        return view('auth.added');
    }
}
