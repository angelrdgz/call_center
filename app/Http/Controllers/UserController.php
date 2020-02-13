<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ["users"=>$users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role;
        $user->save();

        return redirect('admin/users')->with("success", "Usuario guardado correctamente");
    }

    public function destroy(Request $request, $id)
    {
        return redirect('admin/users')->with("success", "Usuario eliminado correctamente"); 
    }
}
