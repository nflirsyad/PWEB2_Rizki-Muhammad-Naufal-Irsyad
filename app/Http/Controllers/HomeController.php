<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        
        // $test = Auth::user()->userType;
        // dd($test);
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        if (Auth::user()->userType === 'admin') {
            return redirect()->route('dashboard');
        }
        if (Auth::user()->userType === 'user') {
            return redirect()->route('user.home');
        }
    }
}
