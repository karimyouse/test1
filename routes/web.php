<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/////////////////////////////////////

Route::get('/about' , function(){
    $name = 'Karim';
    $departs = [
        '1' => 'Tichnical' ,
        '2' => 'Finacial' ,
        '3' => 'Seles' ,
    ];
    //return view('about') -> with (key: 'name' , value: $name);
   // return view('about' , data: ['name' => $name]);   array
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

Route::get('tests' , function(){
    return view('tests');
});

Route::post('create' , function(){
    $task_name = $_POST['name'];
    DB::table('tests')->insert(['name' => $task_name]);
    return view('tests');
});

Route :: post ('delete/{id}',function($id){

  DB:: table('tests')->where('id',$id)->delete();

  return redirect()->back();


});

Route :: post ('edit/{id}',function($id){

    $test = DB :: table ('tests')->where('id',$id)->first();
    $tests = DB :: table('tests')-> get();
    return view('tests',compact('test','tests'));


});


Route :: post('update',function(){

    $id = $_POST['id'];

    DB:: table('tests')->where('id','=',$id)->update(['name'=>$_POST['name']]);

    return redirect('tests');



});
