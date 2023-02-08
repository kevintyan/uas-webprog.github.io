<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    public function index() {
        return view('manageAccount', [
            'users' => User::all()
        ]);
    }

    public function setRole(User $user) {
        return view('setRole', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    public function updateRole(Request $request) {
        $validation = $request->validate([
            'id' => 'required',
            'role_id' => 'required'
        ]);

        User::where('id', $request->id)->update($validation);

        return redirect('/manage')->with('success', 'Role has been set successfuly');
    }

    public function deleteAccount(User $user) {
        User::destroy($user->id);

        return redirect('/manage')->with('delete', 'Account has been successfuly delete');
    }
}
