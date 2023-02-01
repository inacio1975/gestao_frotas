<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;

class InfoUserController extends Controller
{

    public function index(){
        $usuarios = User::get();
        $title = 'Utilizadores';
        return view('laravel-examples/user-management', compact('title', 'usuarios'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('laravel-examples/create-user', compact('roles', 'user'));
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view('laravel-examples/edit-user', compact('roles', 'user'));
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'position'     => ['required'],
            'avatar' => 'nullable|file|image|mimes:jpg,jpeg,gif,png',
        ]);

        $imageName = null;
        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('storage/users'), $imageName);
        }

        $defaultPassword = "novo123";

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'avatar' => $imageName,
            'password' => Hash::make($defaultPassword),
        ]);

        $user->assignRole($request->position);

        return redirect('user-management')->with('success','Usuario adicionado, password é: '. $defaultPassword);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'position'     => ['required'],
            'avatar' => 'nullable|file|image|mimes:jpg,jpeg,gif,png',
        ]);

        $imageName = $user->avatar;
        $password = $user->password;

        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('storage/users'), $imageName);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'avatar' => $imageName,
        ]);

        foreach ($user->getRoleNames() as $userRole) {
            $user->removeRole($userRole);
        }

        $user->assignRole($request->position);

        return redirect('user-management')->with('success','Usuario actualizado');
    }
}
