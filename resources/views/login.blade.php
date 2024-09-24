<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("login_user") }}" method="POST">
        @csrf
        <h1>Login Page</h1>
        <label for="name">
            Name : 
        </label>
        <input type="text" 
               name="name" 
               id="name" 
               placeholder="Ngweisheng" 
               value="{{ old("name") }}">
               @error('name')
                   <p style="color:red">{{ $message }}</p>
               @enderror
               <br><br>
        <label for="password">
            Password :
        </label>
        <input type="password" 
               name="password" 
               id="password"
               >
               @error('password')
                   <p style="color:red">{{ $message }}</p>
               @enderror
               <br><br>

        <input type="submit" value="Login">
        <p>Don't Have Acc <a href="{{ route('register') }}">Register Here</a></p>

        @session('message')
        <script>
            alert("{{ session('message') }}")
        </script>
        @endsession
        
        @session('success')
        <script>
            alert("{{ session('success') }}")
        </script>
        @endsession
    </form>
</body>
</html>