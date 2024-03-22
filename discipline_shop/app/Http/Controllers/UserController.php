<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{ public function __construct()
    {
        $this->middleware('auth');
    }

    function users()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $total_users = User::count();
        return view('livewire\admin\users\users', compact('users', 'total_users'));
    }

}
