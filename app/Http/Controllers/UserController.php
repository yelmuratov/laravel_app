<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   
    public function index(){
        $users = User::all();

        return view('admin.user.index', ['users' => $users]);
    }

    public function createNew(){
        return view('admin.user.create');
    }

    public function create(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        return redirect('/admin/data')->with('success', 'User created successfully');
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.user.show', ['user' => $user]);
    }
}
