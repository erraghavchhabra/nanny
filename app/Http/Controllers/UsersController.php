<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Phone;
class UsersController extends Controller
{
   public getPhone(Request $request)
    {
        $phone = User::find($request->user_id)->phone;
        return $phone;
    }

    public storePhone(Request $request){

        $user = User::find($request->user_id);
        $phone = new Phone;
        $phone->phone = $request->phone;
        $user = $user->$phone()->save($phone);
    }
}
