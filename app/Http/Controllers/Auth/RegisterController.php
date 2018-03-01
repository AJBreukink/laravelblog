<?php

namespace App\Http\Controllers\Auth;

use App\User;
<<<<<<< HEAD
use App\Role;
=======
use App\Setting;
use App\Role;
use App\Mail\Welcome;
>>>>>>> 197cac121c58e31b785aa133495de658041caf41
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255|unique:users',
            'blog_name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
      $free_user = Role::find(1);

      $user =   User::create([
            'name' => $data['name'],
            'blog_name' => $data['blog_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'total_blogposts' => 0,
        ]);
        $user->roles()->sync($free_user);
<<<<<<< HEAD
=======
        $user_id = $user->id;
        $settings = Setting::create([
              'user_id' => $user_id,
              'enable_newcomment' => 'yes',
              'enable_newfollower' => 'yes',
              'enable_newpost' => 'yes',

          ]);
        \Mail::to($user)->send(new Welcome($user));
>>>>>>> 197cac121c58e31b785aa133495de658041caf41

        return $user;
    }
}
