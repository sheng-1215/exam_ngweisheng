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
        }
        img{
            max-width: 50px;
            max-height: 80px;
        }
        table{
            width: 100%;
        }
        table,th,td{
            border: 2px outset grey;
            border-collapse: collapse;
        }
        input{
            font-size: 150px;
            border: 10px outset black;
            background: transparent;
            color: green;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Image</th>
            <th>Product_Name</th>
            <th>Price <b>(Rm)</b></th>
            <th>Mass <b>(Gram)</b></th>
            <th>Status</th>
        </tr>
        @foreach ($cartlist as $cartlists)
        <tr>
            <td><img src="{{ asset($cartlists->img) }}" alt=""></td>
            <td>{{ $cartlists->p_name }}</td>
            <td><b>Rm </b>{{ $cartlists->mass * $cartlists->p_price/100 }}</td>
            <td>{{ $cartlists->mass }} <b>gram</b></td>
            <td><b style="color: red">{{ $cartlists->c_status }}</b></td>
        </tr>
    @endforeach
    </table><br><br>

    <form action="{{ route('checkout') }}" method="post">
        @csrf
        @method("PUT");
        <input type="submit" value="Checkout">
    </form>
</body>
</html>