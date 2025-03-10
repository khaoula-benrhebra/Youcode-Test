<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Candidat;
use App\Models\Document;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $user = Auth::user();
            
         
            if ($user->hasRole('Administrateur')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('Staff')) {
                return redirect()->route('staff.dashboard');
            } elseif ($user->hasRole('Candidat')) {
                return redirect()->route('candidat.dashboard');
            }
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }
    
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    
    public function register(RegisterRequest $request)
    {
        
        $candidatRole = Role::where('name', 'Candidat')->first();
        
        
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $candidatRole->id,
        ]);
        
        
        $candidat = Candidat::create([
            'dateBorth' => $request->dateBorth,
            'adresse' => $request->adresse,
            'CIN' => $request->CIN,
            'user_id' => $user->id,
        ]);
        
        
        if ($request->hasFile('profile_photo')) {
            Document::upload(
                $request->file('profile_photo'),
                'profile_photo',
                $candidat->id
            );
        }
        
        
        if ($request->hasFile('cin_photo')) {
            Document::upload(
                $request->file('cin_photo'),
                'cin_photo',
                $candidat->id
            );
        }
        
        
        Auth::login($user);
        
        return redirect()->route('candidat.dashboard');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}