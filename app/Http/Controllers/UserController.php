<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setAsActive(User $user){
        $user->update(['status' => '1']);
        return redirect()->back()->with(['message' => 'User status has been changed to Active']);
    }

    public function setAsInactive(User $user)
    {
        $user->update(['status' => '0']);
        return redirect()->back()->with(['message' => 'User status has been changed to Inactive']);
    }
}