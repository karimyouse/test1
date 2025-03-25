<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = 'Karim';
    $departments = [ 
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ]; 
      
   
    return view('about', data: compact('name' , 'departments')); 
}); 
Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [ 
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
     ]; 

    return view('about', compact('name'));
}); 
Route::get('app', function () {
    return view('layouts.app');
});


Route::get('tasks', action: [TaskController::class , 'index']);

Route::post('create',action: [TaskController::class , 'create']);  

Route::post('delet/{id}', action: [TaskController::class, 'destroy']);  

Route::post('edit/{id}', action: [TaskController::class, 'edit']);

Route::post('update/{id}', action: [TaskController::class, 'update']);  



 Route::get('users', [UserController:: class, 'index']);

Route::post('create',  [UserController:: class, 'create']);

Route::post('delete/{id}', [UserController:: class, 'destroy']);

Route::post('edit/{id}',[UserController:: class, 'edit']);

Route::post('update', [UserController:: class, 'update'] );
