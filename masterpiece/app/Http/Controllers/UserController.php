<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        // dd($users);
        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => ['required', 'regex:/^(079|078|077)\d{7}$/','unique:users'],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);
        
        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'user_name' => $request->input('user_name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' =>  Hash::make ($request->input('password')),
        ]);
         // The old way
        // $users = new User();
        // $users->first_name = $request->input('first_name');
        // $users->last_name = $request->input('last_name');
        // $users->email = $request->input('email');
        // $users->mobile = $request->input('phone_number');
        // $users->user_name = $request->input('user_name');
        // $users->password = Hash::make ($request->input('password'));
        // $users->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
       

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
        $users = User::findOrFail($id);
        
        return view('dashboard.users.edit', compact('users'));
    }

    public function update(Request $request, User $users , $id)
    {

        $request->validate([
            'email' => 'email',
            'phone_number' => ['regex:/^(079|078|077)\d{7}$/','unique:users'],
            'password' => [
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);
        $users = User::findOrFail($id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->user_name = $request->input('user_name');
        $users->phone_number = $request->input('phone_number');
        $users->email = $request->input('email');
        $users->password = Hash::make ($request->input('password'));
        $users->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'User deleted successfully.');
    }
}
