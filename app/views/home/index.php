<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1><?= $this->h1 ?></h1>
    <ul><?php
        foreach($this->data as $d): ?>
   <li><?= $d['username']; ?></li>
   <?php endforeach; ?>
    
</ul>
</body>

</html>