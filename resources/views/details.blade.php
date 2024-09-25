<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            margin-top: 20px;
        }
        img{
            max-width: 50px;
            max-height: 75px;
        }
        .left{  
            float: left;
            width: 50%;
        }
        .right{
            float: right;
            width: 50%;
        }
    </style>
</head>
<body>
    <form action="">
        <div class="left">
            <img src="{{ asset("$details->img") }}" alt=""><br>
            <label for="p_name">Product Name : </label>
            <input type="text" 
                   name="p_name" 
                   value="{{ $details->p_name }}" 
                   id="p_name" readonly>

                <br><br>

            <label for="p_price">Price (Rm) : </label>
            <input type="text" 
                   name="p_price" 
                   value="{{ $details->p_price }}" 
                   id="p_price" readonly>
                   
                <br><br>

            <label for="p_mass">Mass(gram) : </label>
            <input type="number" 
                   name="p_mass" 
                   value="{{ $details->p_mass }}" 
                   id="p_mass"
                   onchange="calculate()">

                <br><br>

            <input type="submit" value="Buy">
        </div>
        <div class="right">
            <label for="total_price"><b>Total Price : </b></label><br>
            <input type="text" 
                   name="total_price" 
                   id="total_price"
                   value="">
        </div>
    </form>
</body>
</html>

<script>
    function calculate(){
        var price = document.querySelector("input[name='p_price']").value;
        var mass = document.querySelector("input[name='p_mass']").value;

        var total = price/100*mass;

        document.querySelector("input[name='total_price']").value="Rm " + total;

    }
</script>