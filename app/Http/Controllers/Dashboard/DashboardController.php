<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index() {
    if (Auth::user()->role == 'admin') {
      return view('dashboard.admin.dashboard');
    }
    
    if (Auth::user()->role == 'doctor') {
      return view('dashboard.doctor.dashboard');
    }
  }
}