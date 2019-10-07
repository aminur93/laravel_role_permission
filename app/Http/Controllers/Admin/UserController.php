<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with('users',User::all());
    }
    
    public function edit($id)
    {
        if(Auth::user()->id == $id)
        {
            return redirect()->route('adminusers.index')->with('warning','You are not allowed to edit yourself');
        }
        
        return view('admin.users.edit')->with(['users' => User::find($id), 'roles' => Role::all()]);
    }
    
    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id)
        {
            return redirect()->route('adminusers.index')->with('warning','You are not allowed to edit yourself');
        }
        
        $user = User::find($id);
        $user->roles()->sync($request->roles);
        
        return redirect()->route('adminusers.index')->with('success','Updated Successfully!!');
    }
    
    public function destroy($id)
    {
        if(Auth::user()->id == $id)
        {
            return redirect()->route('adminusers.index')->with('warning','You are not allowed to Delete yourself');
        }
        
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('adminusers.index')->with('success','User Deleted Successfully');
    }
}
