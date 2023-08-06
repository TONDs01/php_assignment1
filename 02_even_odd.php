<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and odd</title>
</head>
<body>
    <form action="">
    <input type="number" name="num" placeholder="Enter any number" require>
    <input type="submit" name="done">
    </form>
    <?php
   // even number = 2 4 6 8 10 12 14
    // odd number = 1 3 5 7 9 11 13 15
if (isset($_GET['done'])) {
    $number = $_GET['num'];
    // echo $number;
    if ($number%2==0) {
        echo "Your number is even  ".$number;
    }
    else{
        echo "Your number is odd  ".$number;
    }
}
   
?>
</body>
</html>

