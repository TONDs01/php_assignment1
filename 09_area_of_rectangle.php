<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Of Rectangle</title>
</head>
<body>
    <h1>Area Of Rectangle </h1>
    <form action="">
        <input type="number" name="width" placeholder="Enter Width of rectangle" require    >
        <input type="number" name="lenght" placeholder="Enter Lenght of rectangle" require>
        <input type="submit" name="done" value="Area Of Rectangle">
    </form>
    <br>
    <?php
        if (isset($_GET['done'])) {
            $w = $_GET['width'];
            $l = $_GET['lenght'];
            
            $area = $w * $l;
            echo "Area of Rectangle = ".$area;
        }
    ?>
</body>
</html>