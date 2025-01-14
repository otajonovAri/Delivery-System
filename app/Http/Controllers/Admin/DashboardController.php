<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $userId = Auth::id();

        // dd(Auth::user()->name);

        $restaurant = Restaurant::where('user_id', $userId)->first();

        return view('admin.dashboard', compact('restaurant'));
    }
}
