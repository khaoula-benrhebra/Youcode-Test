<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController; 
use App\Http\Controllers\Admin\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    });
  
    Route::middleware('staff')->group(function () {
        Route::get('/staff/dashboard', [DashboardController::class, 'staffDashboard'])->name('staff.dashboard');
    });

    Route::middleware('candidat')->group(function () {
        Route::get('/candidat/dashboard', [DashboardController::class, 'candidatDashboard'])->name('candidat.dashboard');

        
        Route::get('/candidat/quiz', [App\Http\Controllers\Candidat\QuizCandidatController::class, 'index'])->name('candidat.quiz.index');
        Route::get('/candidat/quiz/start', [App\Http\Controllers\Candidat\QuizCandidatController::class, 'start'])->name('candidat.quiz.start');
        Route::post('/candidat/quiz/submit', [App\Http\Controllers\Candidat\QuizCandidatController::class, 'submit'])->name('candidat.quiz.submit');
        Route::get('/candidat/quiz/result', [App\Http\Controllers\Candidat\QuizCandidatController::class, 'result'])->name('candidat.quiz.result');
    });
});


Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user->hasRole('Administrateur')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('Staff')) {
            return redirect()->route('staff.dashboard');
        } elseif ($user->hasRole('Candidat')) {
            return redirect()->route('candidat.dashboard');
        }
        return redirect('/');
    })->name('dashboard');
    
   
});
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('questions', App\Http\Controllers\Admin\QuestionController::class);
    Route::resource('quizzes', App\Http\Controllers\Admin\QuizController::class);
});


