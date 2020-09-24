<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    public function index() {
        $users = DB::select("select * from users");
        return view('userlist', compact("users"));
    }
}
