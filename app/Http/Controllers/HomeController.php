<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัสดี";
    }
    public function greeting($name){
        return "สวัสดี $name";
    }

    public function calculate($number1 , $number2 , $number3){
        return "ผลรวมของเลข $number1 , $number2 และ $number3 คือ ".($number1 + $number2 + $number3)."นะจ๊ะ";
    }
}
