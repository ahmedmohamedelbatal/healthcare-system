<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  public function index() {
    $departments = Department::all();
    return view('dashboard.admin.departments.index', compact('departments'));
  }

  public function create() {
    return view('dashboard.admin.departments.create');
  }

  public function store(Request $request) {
    $request->validate([
      'department_name' => 'required|unique:departments',
    ]);
    
    Department::create([
      'department_name' => $request->department_name,
      'department_description' => $request->department_description,
    ]);

    session()->flash('add', 'Department Added Successfully');
    return redirect()->route('departments.index');
  }

  public function edit(int $id) {
    $department = Department::findorFail($id);
    return view('dashboard.admin.departments.edit', compact('department'));
  }

  public function update(Request $request, int $id) {
    $department = Department::findorFail($id);

    $request->validate([
      'department_name' => 'required|unique:departments,department_name,' . $department->id,
    ]);

    $department->update([
      'department_name' => $request->department_name,
      'department_description' => $request->department_description,
    ]);

    session()->flash('edit', 'Department Updated Successfully');
    return redirect()->route('departments.index');
  }

  public function destroy(int $id) {
    $department = Department::findorFail($id);
    $department->delete();

    session()->flash('delete', 'Department Deleted Successfully');
    return redirect()->route('departments.index');
  }
}
