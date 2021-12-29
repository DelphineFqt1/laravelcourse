<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminsController extends Controller
{
    public function admins()
    {
        $users = User::all();

        return view('admin.admin', ['users' => $users]);
    }

    public function profil($id)
    {
        $user = User::findOrFail($id);

        return view('admin.profil', ['user' => $user]);
    }

}