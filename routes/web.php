<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Students
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/students",function(){
 
    $arr=[
        
        'students' => Students::all()
    ];
    return view('students',$arr);
    
    
});