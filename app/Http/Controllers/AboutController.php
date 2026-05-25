<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($param1 = null, $param2 = null){
        return "
        <h1>About Laravel</h1>
        <p>
        Laravel is a PHP-based web framework for building, deploying and monitoring web applications.
        The framework has useful built-in features like the Artisan command-line interface (CLI), native
        authentication and model-view-controller (MVC) architecture. These features make Laravel easy to use
        and are the main reason for its popularity.
        $param1 and $param2 are the parameters passed from the route.
        </p>
        ";
    }
}
