<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //トップ画面を表示する
    public function index()
    {
      return view("user.index");
    }
}
