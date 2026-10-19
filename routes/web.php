<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard - TaskFlow',
    ]);
});

Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::patch('/tasks/{task}/toggle', [TaskController::class, 'toggle'])
    ->name('tasks.toggle');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About - TaskFlow',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact - TaskFlow',
    ]);
});
