<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view ('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|email|unique:users',
        'password' => 'required|min:6',
        ]);

        User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('users.index')->with('success', 'User Berhasil Ditambahkan');

    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id){
        $user = User::findOrfail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'required|min:6',
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('users.index')->with('success', 'Data Pengguna berhasil diperbaharui');
}

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success','Data Pengguna berhasil dihapus');
    }

}
