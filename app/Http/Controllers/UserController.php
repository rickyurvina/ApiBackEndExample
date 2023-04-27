<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if ($user) {
            $user->name = $request->name;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->password = $request->password;
            return $user->save();

            return response()->json([
                'status' => 202,
                'user' => $user
            ]);
        }
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
