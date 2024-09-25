<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        th,td,table{
            border: 3px outset grey;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    @session("Success")
        <script>
            alert("{{ session('Success') }}")
        </script>
    @endsession
@auth
    <form action="">
        <input type="submit" value="Logout">
    </form>

    @else
    
    <form action="{{ route('login') }}">
            <input type="submit" value="Login">
        </form>
    
@endauth
        

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th colspan="2">Action</th>
        </tr>
    @foreach ($Products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td><b>Rm </b>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <form action="">
                    <input type="submit" value="Add To Cart">
                </form>
            </td>
            <td><a href="">Details</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>