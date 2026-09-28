<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard - TaskFlow'
    ]);
});

Route::get('/tasks', function () {
    return view('tasks', [
        'title' => 'Tasks - TaskFlow'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About - TaskFlow'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact - TaskFlow'
    ]);
});
