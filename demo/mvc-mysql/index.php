<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- add controller -->
    <?php
        include_once("controllers/controller.php");
        
        $connection1 = new connectionObject("localhost", "username", "password", "db name");
        $controller = new Controller($connection1);
        $controller->start();
        $connection2 = new connectionObject("localhost", "username", "password", "db name");
        $controller = new Controller($connection2);
        $controller->start();
    ?>
</body>
</html>