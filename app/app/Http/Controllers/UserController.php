<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data =[]; 
        $data['id'] =  123;
        $data['name'] =  "jassem";
        $data['work'] = "student";
        return view('welcome' ,$data);  
    }
    public function show(){
        
        $obj =  new \stdClass();
        $obj ->name =  "jassem";
        $obj ->id =  123;
        $obj ->work =  "jassem";
        return view('welcome',compact('obj'));
    }


}
