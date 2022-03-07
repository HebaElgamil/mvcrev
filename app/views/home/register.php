<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="../home/register" method="POST">

<input type="text" name="username">
<input type="text" name="email">
<input type="password" name="password">
<input type="submit">
    </form>
<a href="login.php">Login?</a>
</body>

</html>