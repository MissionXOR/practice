<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\testController;
use App\Http\Controllers\studentController;

// function getUser(){
//     return [
//         1=> ['name'=>'aminul', 'phone'=>'01877','city'=> 'dhaka'],
//         2=> ['name'=>'anindita', 'phone'=>'01877','city'=> 'barisal'],
//         3=> ['name'=>'jovan', 'phone'=>'01877','city'=> 'rangpur'],
//     ];
// }



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/jstest', function () {
//     return view('jstest');
// });


// Route::get('/user', function () {
//     // return view('user',['name'=>'aminul']);

//     // $data="MD Aminul Islam";

//     // $names=[
//     //     1=> ['name'=>'aminul', 'phone'=>'01877','city'=> 'dhaka'],
//     //     2=> ['name'=>'anindita', 'phone'=>'01877','city'=> 'barisal'],
//     //     3=> ['name'=>'jovan', 'phone'=>'01877','city'=> 'rangpur'],
//     // ];
//     $names=getUser();

//      return view('user',[
//         // 'name'=> $data,
//         // 'city'=>''
//         'user'=>$names,


//     ]);

//     // return view('user')->with('name',$data)->with('city','Barishal');
//     // return view('user')->withUser($data)->withCity('Rangpur');
// });

// Route::get('/users/{id}',function($id){
//     $user=getUser();
//     $users=$user[$id];
//     return view('users',['id'=>$users]);
// })->name('view.users');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('controller1');
// });


// .................this is single controller create...................
// Route::get('/',[pageController::class,'showHome'] )->name('home');

// Route::get('/blog',[pageController::class,'showBLog'] )->name('blog');

// Route::get('/user/{id}',[pageController::class,'showUser'] )->name('users');

// //..............................this is group controller ............................
// Route::controller( pageController::class)->group(function (){
//    Route::get('/','showHome')->name('home');

//     Route::get('/blog','showBLog')->name('blog');

//     Route::get('/user/{id}','showUser')->name('users');
// });
// Route::get('/test',testController::class);

//  Route::get('/studentList', function () {
//     return view('studentList');
//  });

Route::get('/',[studentController::class,'showStudent'])->name('home');
Route::post('/add',[studentController::class,'addStudent'])->name('add.user');
Route::get('/student/{id}',[studentController::class,'singleStudent'])->name('view.student');
Route::get('/delete/{id}',[studentController::class,'deleteStudent'])->name('delete.student');
Route::get('/update/{id}',[studentController::class,'updateStudent'])->name('update.student');
Route::put('/updateS/{id}',[studentController::class,'update'])->name('update');
Route::view('newStudent','/studentAdd');