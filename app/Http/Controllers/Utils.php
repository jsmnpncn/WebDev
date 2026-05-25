<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utils extends Controller
{
    //addition
    public function sum($param1, $param2){
        return $param1 + $param2;
    }

    //subtraction
    public function difference($param1, $param2){
        return $param1 - $param2;
    }

    //product
    public function product($param1, $param2){
        return $param1*$param2;
    }

    //quotient
    public function quotient($param1, $param2){
        return $param1/$param2;
    }
}
