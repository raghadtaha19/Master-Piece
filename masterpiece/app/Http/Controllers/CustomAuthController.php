<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LandCard;
use App\Models\User;
use App\Models\SellForm;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class CustomAuthController extends Controller
{
    public function login(){
        return view ('dashboard.dashboard_login');
    }

    public function loginUser(Request $request){
        $categories = Category::all();
        $users = User::all();
        $landcards = LandCard::all();
        $sellforms = SellForm::all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
            ]
        ]);
        
        $admin = Admin::where('email', $request->email)->first();
        
        if ($admin) {
            if ($request->password == $admin->password) {
                $request->session()->put('id', $admin->id);
                session()->put('name', $admin->name);
                $categoryCount = Category::count();
                $userCount = User::count();
                $sellformCount = SellForm::count();
                $landcardCount = LandCard::count();
                
                
                return view('welcome-dashboard', [
                    'categoryCount' => $categoryCount,
                    'userCount' => $userCount,
                    'sellformCount' => $sellformCount,
                    'landcardCount' => $landcardCount
                ]);
                            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }
    
    public function logout()
    {
        if (Session::has ('id')){
            Session::pull('id');
        }
        return view ('dashboard.dashboard_login'); 
    }

    public function sidebar()
    {
        $categoryCount = Category::count();
        $userCount = User::count();
        $sellformCount = SellForm::count();
        $landcardCount = LandCard::count();
        // dd($categoryCount);
                
        return view('welcome-dashboard', [
        'categoryCount' => $categoryCount,
        'userCount' => $userCount,
        'sellformCount' => $sellformCount,
        'landcardCount' => $landcardCount
        ]);
    }

}