<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //トップ画面を表示する
    public function index()
    {
      return view("user.index");
    }

    public function show()

    {
   
   $auth = Auth::user();
   
   return view('user.show',[ 'auth' => $auth ]);
   
    }

    public function showList()

    {
   
   $users = User::all();
   
   return view('user.list',[ 'users' => $users]);
   
    }


    public function edit()
 {

$auth = Auth::user();

return view('user.edit',[ 'auth' => $auth ]);

 }
   
 public function update(Request $request) {

    $user_form = $request->all();
    $user = Auth::user();
    //不要な「_token」の削除
    unset($user_form['_token']);
    //保存
    $user->fill($user_form)->save();
    //リダイレクト
    return redirect('/');
}



}
