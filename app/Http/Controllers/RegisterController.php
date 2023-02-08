<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function index() {
        return view('credentials.register', [
            'genders' => Gender::all()
        ]);
    }

    public function create(Request $request) {

        // dd($request);
        $validation = $request->validate([
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|alpha_num',
            'confirm_password' => 'required|min:8|alpha_num|same:password',
            'display_picture_link' => 'required|file|image|mimes:png,jpg,jpeg',
            'role_id' => 'required',
            'gender_id' => 'required'
        ]);

        $validation['display_picture_link'] = $request->file('display_picture_link')->store('profile_image');

        $validation['password'] = bcrypt($validation['password']);

        User::create($validation);
        return redirect('/login')->with('success', 'Account has been successfuly registered, now please login!');
    }

}
