<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $r){
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r){
        $user = User::find($r->id);
        return $user->cars;
    }

    public function insert(Request $r){
        $rawData = $r->only
        (['name',
        'email',
        'cnh',
        'categoria_cnh',
        'password']);

        $user = User::create($rawData);

        return $user;
    }
}
