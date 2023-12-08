<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\DataTables\UserDataTable;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        $user= User::all();
        return view('dashboard.user' ,  compact('user'));
        // return $dataTable->render('dashboard.user');
    }

    public function create()
    {
        return view('dashboard.createuser');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',

        ]);


        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images'), $filename);
            $user['image'] = $filename;
        }


        User::create($user);

        return redirect('userdash')
            ->with('success', 'user added successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.edituser', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/images' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images'), $filename);
            $user->image = $filename;
        }

        $user->save();
        return redirect('userdash')->with('success', 'user updated successflly');

    }
    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        return redirect('userdash')->with('flash_message', 'user deleted successfully');
    }


}