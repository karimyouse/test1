<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function index(){

        $tests = DB:: table(table: 'tests')->get();

    return view('tests',data: compact(var_name: 'tests'));

    }

    public function create(){
        $task_name = $_POST['name'];
    DB::table('tests')->insert(['name' => $task_name]);
    return redirect()->back();
    }

    public function destroy($id){

        DB:: table('tests')->where('id',$id)->delete();

    return redirect()->back();

    }
    

    public function edit($id){
        $test = DB :: table ('tests')->where('id',$id)->first();
    $tests = DB :: table('tests')-> get();
    return view('tests',compact('test','tests'));
    }

    public function update(){
        $id = $_POST['id'];

    DB:: table('tests')->where('id','=',$id)->update(['name'=>$_POST['name']]);

    return redirect('tests');
    }




}
