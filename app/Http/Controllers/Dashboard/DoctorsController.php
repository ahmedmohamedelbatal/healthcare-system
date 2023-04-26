<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
{
  public function index() {
    $doctors = User::all()->where('role', 'doctor');
    return view('dashboard.admin.doctors.index', compact('doctors'));
  }

  public function create() {
    $departments = Department::all();
    return view('dashboard.admin.doctors.create', compact('departments'));
  }

  public function store(Request $request) {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
      'job' => 'required',
      'address' => 'required',
      'phone_number' => 'required|numeric',
      'department_id' => 'required',
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

    User::create([
      'role' => 'doctor',
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'job' => $request->job,
      'address' => $request->address,
      'phone_number' => $request->phone_number,
      'department_id' => $request->department_id,
      'gender' => $request->gender,
      'date_of_birth' => $request->date_of_birth,
      'biography' => $request->biography,
      'image' => $path,
    ]);

    session()->flash('add', 'Doctor Added Successfully');
    return redirect()->route('doctors.index');
  }

  public function show(int $id) {
    $doctor = User::find($id);
    return view('dashboard.admin.doctors.show', compact('doctor'));
  }

  public function destroy(int $id) {
    $doctor = User::findorFail($id);
    $doctor->delete();

    session()->flash('delete', 'Doctor Deleted Successfully');
    return redirect()->route('doctors.index');
  }
}
