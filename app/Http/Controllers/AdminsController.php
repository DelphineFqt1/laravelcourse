<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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

    public function create()
    {

        return view('admin.manageProducts');
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->current_team_id = 1;
        $user->save();
        return redirect()->back();
    }

    public function makeMember($id)
    {
        $user = User::findOrFail($id);
        $user->current_team_id = 0;
        $user->save();
        return redirect()->back();
    }

}