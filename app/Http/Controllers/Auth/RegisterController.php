<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/admin/logo';

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
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'confirm' => 'same:password',
        ],[
            'email.required' => 'Email buộc phải nhập!',
            'email.email' => 'Email không đúng định dạng!',
            'email.max' => 'Email tối đa có 255 ký tự!',
            'email.unique' => 'Email đã tồn tại trong hệ thống!',
            'email.string' => 'Email phải là dạng chuỗi!',
            'password.required' => 'Mật khẩu buộc phải nhập!',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
            'confirm.same' => 'Mật khẩu xác nhận không giống mật khẩu!'
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
        return User::create([
            'name' => 'admin',
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
