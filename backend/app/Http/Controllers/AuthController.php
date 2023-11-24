<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
    $user = User::where('email', $request->email)
                ->orWhere('name', $request->name)
                ->first();

    if ($user && Hash::check($request->password, $user->password)) {
            return response()->json(['message' => '認証成功', 'user' => $user], 200);
        } else {
            return response()->json(['message' => '認証失敗'], 401);
        }
    }

}
