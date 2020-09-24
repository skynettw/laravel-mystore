<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoListController extends Controller
{
    public function index() {
        //$data = DB::table("videolist")->get();
        $data = DB::select("select videolist.name as vname, users.name as uname from videolist inner join users where videolist.userid = users.id");
        return view("videolist", compact('data'));
    }
}
