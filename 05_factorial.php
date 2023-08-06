<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <h1>Factorial for any number</h1>
    <form action="">
        <input type="number" name="factorial" placeholder="Enter any number" require>
        <input type="submit" name="done" value="Factorial">
    </form>
    <?php
    if (isset($_GET["done"])) {
        $number = $_GET['factorial'];
        $fact = 1;
        for ($i = $number; $i > 0; $i--) {
            $fact *= $i;
        }
        echo $fact;
    }
    ?>
</body>

</html>