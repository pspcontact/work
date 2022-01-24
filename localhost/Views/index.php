<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TestPsr</title>
</head>
<body>
    <form action="../Controllers/PostController.php" method="POST">
        <h3>Напарсили</h3>
        <textarea name="data" id="" cols="50" rows="30"></textarea>
        <h3>Укажите метод парсинга</h3>
        <p><input type="checkbox" name="strtok" value="strtok" > strtok + while</p>
        <p><input type="checkbox" name="foreach" value="foreach" > explode + foreach</p>
        <p><input type="checkbox" name="for" value="for" > explode + for</p>
        <button>Выбрать</button>
    </form>
    <?php 
    require "../Controllers/PostController.php"; 
    getData();
    ?>
</body>
</html>
