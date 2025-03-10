<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Question; 
use App\Models\Quiz; 


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function adminDashboard()
    {
        
        Gate::authorize('creat_quize');
        
        $questions = Question::with('options')->get();
        $quizzes = Quiz::with('questions')->get();
        
        return view('dashboards.admin', compact('questions', 'quizzes'));
    } 

    public function staffDashboard()
    {
        
        Gate::authorize('manage_candidats');
        
        return view('dashboards.staff');
    }
    
    public function candidatDashboard()
    {
       
         Gate::authorize('upload_documents');
        
        return view('dashboards.candidat');
    }
}