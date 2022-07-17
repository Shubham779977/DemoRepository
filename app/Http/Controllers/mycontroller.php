<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Redirect;//for redirect page
use DB;
class MyController extends Controller
{
    public function index(){
        return view('index');
     }
     public function emp_create(){
        return view('emp_create');
     }
     public function insert(Request $request){
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      DB::insert('insert into emp values(?,?,?)',[$name,$email,$password]);
 return redirect()->route('show'); //page redirect
      //echo "Record inserted successfully.<br/>";
     // echo '<a href = "/insert">Click Here</a> to go back.';
     // return Redirect::back();//page goback
 
   }
   public function show(){
      $users = DB::select('select * from emp');
      return view('show',['emps'=>$users]);
   }

 
 
}
