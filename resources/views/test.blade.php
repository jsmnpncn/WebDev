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

    <div class = container>
    <h1>Calculator 𓂃⋆.˚</h1>

    <?php /*
    <div class ="container">
        <div class = "row">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example text area</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>

        <br></br>
    */ ?>

    <div class ="container">

        <div class = "row">
            <p>
            The sum is: {{ $sum }} </br> 
            the difference is: {{ $difference }} </br>
            the product is: {{ $product }} </br>
            the quotient is: {{ $quotient }}
            </p>
        </div>

        <div id = "inputFName">
            <input type = "text"></input>
        </div>

        <div class = "g-button">
            <input type = "button" id = ""></input>
        </div>

    </div>  
    </div>
    

</body>

<style>
    .background-calc{
        background-color: #B9D9EB!important;
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