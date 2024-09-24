<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("register_user") }}" method="POST">
        @csrf
        <h1>Register Page</h1>
        <label for="name">
            Name : 
        </label>
        <input type="text" 
               name="name" 
               id="name" 
               placeholder="Ngweisheng"
               value="{{ old("name") }}">
               @error('name')
                   <p style="color: red">{{ $message }}</p>
               @enderror
               <br><br>
        <label for="password">
            Password :
        </label>
        <input type="password" 
               name="password" 
               id="password">
               @error('password')
                   <p style="color: red">{{ $message }}</p>
               @enderror
               <br><br>
        <label for="password_confirmed">
            Confirmation_password :
        </label>
        <input type="password" 
               name="password_confirmation" 
               id="password_confirmed">
               <br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already Have Acc <a href="{{ route('login') }}">Login here</a></p>
</body>
</html>