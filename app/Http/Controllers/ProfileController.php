<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //

    public function index(User $user) {
        return view('profile', [
            'user' => $user,
            'genders' => Gender::all()
        ]);
    }

    public function update(Request $request, User $user) {

        // dd($request);
        $validation = $request->validate([
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|alpha_num',
            // 'confirm_password' => 'required|min:8|alpha_num|same:password',
            'display_picture_link' => 'required|file|image|mimes:png,jpg,jpeg',
            'role_id' => 'required',
            'gender_id' => 'required'
        ]);

        Storage::delete($user->display_picture_link);
        $validation['display_picture_link'] = $request->file('display_picture_link')->store('profile_image');
        $validation['password'] = bcrypt($validation['password']);

        User::where('id', $request->id)->update($validation);

        return redirect('/')->with('success', 'Account data has been changed!');
    }
}
