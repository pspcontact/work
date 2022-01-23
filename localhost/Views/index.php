<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controllers/PostController.php" method="post">
        <h3>Напарсили</h3>
        <textarea name="data"  cols="50" rows="30"></textarea>
        <p><input type="checkbox" name="1" value="1">1</p>
        <p><input type="checkbox" name="2" value="2">2</p>
        <p><input type="checkbox" name="3" value="3">3</p>
        <button>Отправить</button>
    </form>
<?php
require '../Models/Post.php';

?>
</body>
</html>