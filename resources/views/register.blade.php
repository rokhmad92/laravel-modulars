<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <lable for="email">email: </label>
            <input type="email" name="email" id="email">
            <br>
            <lable for="name">name: </label>
                <input type="text" name="name" id="name">
                <br>
                <lable for="password">password :</label>
                    <input type="password" name="password" id="password">
                    <br>
                    <button type="submit">register</button>
    </form>

    <br><br>

    <a href="{{ route('login') }}">login</a>
</body>

</html>
