<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id = null)
    {
        if($id == null) {
            $user = Auth::user();
        } else {
            $user = User::findOrFail($id);
        }

        if($user == null) {
            return redirect("/");
        }

        return view('user.user',['user' => $user, 'posts' => $user->posts()->paginate(20)]);
    }

    /**
     * Show the form for editing the user.
     *
     * @return Response
     */
    public function edit()
    {
        return view('user.edit', ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'max:255',
            'password' => 'confirmed|min:6',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->role = $request->has('editor') ? 'editor' : 'viewer';
        if($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }


        $user->save();

        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy()
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();

        return view('user.deleted');
    }
}
