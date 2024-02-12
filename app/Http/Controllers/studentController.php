<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
   public function addStudent(Request $req){
      $student = DB::table("students")
             ->insert([
               'name'=>$req->name,
               'email'=>$req->email,
               'age'=>$req->age
             ]);
             if($student){
            return redirect()->route('home');
             }
   }
   public function showStudent(){
   //  $student=DB::table('students')->simplePaginate(4);
   $student=DB::select('select * from students');
   return view('welcome',['data'=>$student]);
   }
   public function singleStudent(string $id)
   {
      $student=DB::table('students')->where('id',$id)->get();
      return view('studentview',['data'=>$student]);
   }
   public function deleteStudent(string $id)
   {
      $student=DB::table('students')
               ->where('id',$id)
               ->delete();
      if($student){
         return redirect()->route('home');
      }
   }
   public function updateStudent(string $id)
   {
      $student=DB::table('students')->find($id);
      return view('studentUpdate',['data'=>$student]);
      
   }
   public function update(Request $req,$id)
   {
      $student=DB::table('students')
               ->where('id',$id)
               ->update([
                  'name'=>$req->name,
                  'email'=>$req->email,
                  'age'=>$req->age
               ]) ;
               if($student){
                  return redirect()->route('home');
               }
   }
}