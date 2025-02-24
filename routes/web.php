<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about' , function(){
    $name = 'Karim';
    $departs = [
        '1' => 'Tichnical' ,
        '2' => 'Finacial' ,
        '3' => 'Seles' ,
    ];
    
   return view('about' , data: compact('name' , 'departs'));

});

Route::post('/about' , function(){
    $name = $_POST['name'];
    $departs = [
        '1' => 'Tichnical' ,
        '2' => 'Finacial' ,
        '3' => 'Seles' ,

    ];
    return view('about' , data:compact('name','departs'));

});

Route::get('tests' , [TestController::class, 'index']);

Route::post('create' , [TestController::class, 'create']);

Route :: post ('delete/{id}',[TestController::class,'destroy']);

Route :: post ('edit/{id}', [TestController::class,'edit']);


Route :: post('update',[TestController::class,'update']);

Route :: get('app',function(){
    return view('layouts.app');
} );

Route::get('users',[UserController::class,'index']);
Route::post('create',[UserController::class,'create']);
Route::post('delete/{id}',[UserController::class,'destroy']);
Route::post('edit/{id}',[UserController::class,'edit']);
Route::post('update',[UserController::class,'update']);
