<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsArticle;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class NewsArticleController extends Controller
{
    //
    public function index() {
        return view("dashboard");
    }

    public function handleLogin() {
        return view("login");
    }
    public function handleSignup() {
        return view("signup");
    }
    public function handleRegistration(Request $req) {
        $req->validate([
            'fullName' => 'required',
            'email' => 'required|unique:news_articles',
            'password' => 'required',
        ]);
        newsArticle::create([
            'name' => $req->fullName, 
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        return redirect()->route('login');
    }
    public function handlePostLogin(Request $req) {
        
        $req->validate([
            'email'=> 'required|email', 
            'password'=>'required',
        ]);
        if(Auth::attempt($req->only('email', 'password'))){
            
            return redirect()->route("home");
        } else {
            return back()->with('fail', 'User does not exits!');
        }
    }
    public function handleLogout() {
        auth()->logout();
        return redirect()->route('login');  
    }
}