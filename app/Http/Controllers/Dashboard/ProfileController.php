<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function index() {
    $user = Auth::user();
    return view('dashboard.profile.index', compact('user'));
  }

  public function edit() {
    $user = Auth::user();
    return view('dashboard.profile.edit', compact('user'));
  }

  public function update(Request $request) {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
      'job' => 'required',
      'address' => 'required',
      'phone_number' => 'required|numeric',
      'gender' => 'required',
      'date_of_birth' => 'required|date',
      'image' => 'image',
    ]);

    if ($request->hasFile('image')) {
      $image = $request->file('image')->getClientOriginalName();
      $path = $request->file('image')->storeAs('profiles', $image, 'public_path');
    } else {
      $path = null;
    }

    $user_id = Auth::user()->id;
    User::find($user_id)->update([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'job' => $request->job,
      'address' => $request->address,
      'phone_number' => $request->phone_number,
      'gender' => $request->gender,
      'date_of_birth' => $request->date_of_birth,
      'biography' => $request->biography,
      'image' => $path,
    ]);

    session()->flash('edit', 'Profile Updated Successfully');
    return redirect()->route('profile');
  }

  public function edit_password() {
    return view('dashboard.profile.edit-password');
  }

  public function update_password(Request $request) {
    $user = Auth::user();

    $validatedData = $request->validate([
      'current_password' => 'required|min:8',
      'password' => 'required|min:8|confirmed',
    ]);

    if (Hash::check($request->input('current_password'), $user->password)) {
      $user->password = Hash::make($validatedData['password']);
      $user->save();

      session()->flash('edit', 'Password Updated Successfully');
      return redirect()->route('profile');
    } else {
      return back()->withErrors(['current_password' => 'Current password does not match']);
    }
  }
}
