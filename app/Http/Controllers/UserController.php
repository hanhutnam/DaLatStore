<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.user',['user'=>$user]);
    }

 
    public function edit($id)
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.edit',['user'=>$user]);
    }


    public function update(Request $req, $id)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->username = $req->username;
        $user->email = $req->email;
        $user->fullname = $req->fullname;
        $user->phone = $req->phone;
        dd($req->hasfile('url_avartar'));
 
        // $if($req->hasfile('file'))
        // {
        //    foreach($req->file('file') as $key => $file)
        //    {
        //        $path = $file->store('public/images');
        //        $name = $file->getClientOriginalName();
        //        $user[$key]['url_avartar'] = $path;
        //    }
        // }

        $user->save();
        
        return redirect()->route('user.index')->with('success', 'Cập nhật thành công!');
    }
}
