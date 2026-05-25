<?php /*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="color: #402D21; font-family: sans-serif">
    <div class = "background-calc">
        <div class = "container">
            <h1>Calculator 𓂃⋆.˚</h1>

            <div class = "row">
                <p>
                    The sum is: {{ $sum }} </br>
                    The difference is: {{ $difference }} </br>
                    The product is: {{ $product }} </br>
                    The quotient is: {{ $quotient }}
                </p>
            </div>

            <div id = "inputFName">
                <input type="text"></input>
            </div>

            <div class="g-button">
                <input type = "button"></input>
            </div>

        </div>

        <div class = "container border">
            <div class = "row">
                <div class = "col-lg-6 border"> col 6 </div>
                <div class = "col-lg-6 border"> col 6 </div>
                <div class = "col-lg-6 border"> col 6 </div>
            </div>

            <div class = "row">
                <div class = "col-lg-4 col-md-6 col-sm-4 border"> col 4 </div>
                <div class = "col-lg-4 col-md-6 col-sm-4 border"> col 4 </div>
                <div class = "col-lg-4 col-md-6 col-sm-4 border"> col 4 </div>
            </div>
        </div>
    </div>

</body>

<style>
    .background-calc{
        background-color: #B9D9EB;
        font-weight: 25px;
    }

    .background-calc .g-button{
        background-color: #F0CECD;
    }

    #InputFName{
        font-weight: 10px;
    }
</style>

</html>
*/ ?>

@extends('common.main')
@section('title', 'Login')
@section('content')

<div class="container py-5">
    <div class="row g-4">
        
        <!-- LEFT -->
        <div class="col-md-4">
            <div class="card p-4 shadow-sm">
                <i class="bi bi-box-arrow-in-right fs-3 text-center"></i>
                <h5 class = "text-center fw-bold">LOG IN</h5>

                <div class="mb-4">
                    <label>Email:</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-4">
                    <label>Password:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-dark">Login</button>
                    <a href="#">Forgot password?</a>
                </div>

            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-md-8">
            <div class="text-center mb-5">
                <h2 class = "fw-bold">PRICING</h2>
                <p>
                    Photocard pricing is driven by lorem, ipsum, and dolor popularity, with standard amet cards generally costing $5–$15, while rare POBs
                    (pre-order benefits), broadcast cards, or popular member cards can exceed $50–$100+. Prices are typically set by consectetur trends
                    on Instagram/Twitter rather than adipisicing regulations, with higher prices found on platforms like eelit.
                </p>
            </div>

            <!-- BOXES (6) -->
            <div class="row g-3 mb-5">
                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 1</div>
                </div>
                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 2</div>
                </div>
                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 3</div>
                </div>

                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 4</div>
                </div>

                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 5</div>
                </div>

                <div class="col-md-4">
                    <div class="border bg-white text-center p-5">Box 6</div>
                </div>
            </div>

            <!-- TABLE -->
            <h4 class="text-center mb-3 fw-bold">COMPARE PLANS</h4>
            <table class="table table-bordered text-center bg-white">
                <tr>
                    <th></th>
                    <th>Free</th>
                    <th>Pro</th>
                    <th>Enterprise</th>
                </tr>

                <tr>
                    <td class="text-start">Public</td>
                    <td><i class="bi bi-check-lg"></i></td>
                    <td><i class="bi bi-check-lg"></i></td>
                    <td><i class="bi bi-check-lg"></i></td>
                </tr>

                <tr>
                    <td class="text-start">Private</td>
                    <td></td>
                    <td><i class="bi bi-check-lg"></i></td>
                    <td><i class="bi bi-check-lg"></i></td>
                </tr>

                <tr>
                    <td class="text-start">Permissions</td>
                    <td></td>
                    <td><i class="bi bi-check-lg"></i></td>
                    <td><i class="bi bi-check-lg"></i></td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection