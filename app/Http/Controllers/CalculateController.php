<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;

class CalculateController extends Controller
{
    /*
    public function index($num1, $num2){
        $sum = $this->addNumbers($num1, $num2);
        $difference = $this->difference($num1, $num2);
    return "<h1>Sum: ".$sum."</h1><h1>Difference: ".$difference."</h1>"; 
    }
    
    public function addNumbers($param1, $param2){
        return $param1 + $param2;
    }

    public function difference($param1, $param2){
        return $param1 - $param2;
    }
    */

    public function index($param1, $param2){

        FacadesLog::info('================ START Index Function =======================');
        $utils = new Utils();

        //dd('STOP');
        $sum = $utils->sum($param1, $param2);
        $difference = $utils->difference($param1, $param2);
        $product = $utils->product($param1, $param2);
        $quotient = $utils->quotient($param1,$param2);

        FacadesLog::info('Sum = ' . $sum);
        FacadesLog::info('Difference = ' . $difference);
        FacadesLog::info('Product = ' . $product);
        FacadesLog::info('Quotient = ' . $quotient);        

        FacadesLog::info('================ END Index Function =======================');
                            // ['product' => $product]
        return view('calculate', compact('sum','difference','product','quotient'));
    }

}
