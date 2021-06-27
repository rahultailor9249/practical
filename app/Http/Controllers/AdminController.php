<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email',$request->email)->where('password',$request->password)->first();
        if($user) {
            return response()->json([
                'message'=>'login sucessfully'
            ],201);
        }
        return response()->json(['message'=>'wrong authendication'],401);
    }
    public function listData(Request $request) {
        $search = $request->search ?? '';
        $user = User::where('is_admin',0)->get();
        if($search != ''){
            $user = $user->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('email', 'LIKE', '%' . $search . '%');
            });
        }
        return response($user);
    }
    public function deleteData(Request $request) {
        $user = User::where('id',$request->id)->delete();
        if($user) {
            return response()->json([
                'message'=>'delete successfully'
            ],201);
        }
        return response()->json(['message'=>'id not found'],401);

    }
}
