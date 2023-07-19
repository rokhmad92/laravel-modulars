<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulars Laravel Login</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <lable for="email">email: </label>
            <input type="email" name="email" id="email">
            <br>
            <lable for="password">password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit">Login</button>
    </form>

    <br><br>

    <a href="/register">Register</a>
</body>

</html>
