<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordController extends Controller
{
   protected function index(){
       return view('auth.passwords.changepassword');
   }
   protected function updatepsaaword(Request $request){
         $password = Auth::user()->password;
         $oldpassword = $request->oldpassword;
         if (Hash::check($oldpassword, $password)){
//             echo "match";
             $user = User::find(Auth::id());
//             echo $user->password;
//             echo hash::make($request->password);
             $user->password = hash::make($request->password);
             $user->save();
             echo  "password successfully changes";
         }
   }
}
