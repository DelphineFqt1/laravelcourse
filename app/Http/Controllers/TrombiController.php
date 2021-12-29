<?php

namespace App\Http\Controllers;
use App\Models\User;

class TrombiController extends Controller
{
    public function trombi()
    {
        $foyzmen = User::where('current_team_id', 1)->get();

        return view('trombi.trombi', ['foyzmen' => $foyzmen]);
    }

}