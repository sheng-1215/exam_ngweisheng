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
        img{
            max-width: 100px;
            max-height: 125px;
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
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Mass</th>
            <th>Action</th>
        </tr>
    @foreach ($Products as $product)
        <tr>
            <td><img src="{{ asset("$product->img") }}" alt=""></td>
            <td>{{ $product->p_name }}</td>
            <td><b>Rm </b>{{ $product->p_price }}</td>
            <td>{{ $product->p_mass }} <b>gram</b></td>
            <td>
                <button type="button" onclick="location.href='{{ route('addcart',$product->id) }}'">Add to Cart</button>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>