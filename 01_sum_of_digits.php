<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of digits</title>
</head>
<body>
<form action="">
    <input type="number" name="num" placeholder="Enter any number" require>
    <input type="submit" name="done">
    </form>

    <?php
    //number  = 12345
    //sum of digits = 1+2+3+4+5

    $total = 0;
    $remender = 0;
    if (isset($_GET['done'])){
        $number = $_GET['num'];
 
    for ($i=0; $i <= strlen($number); $i++) { 
        //without strlen one digit is missing
        $remender = $number%10;
        $total = $total + $remender;
        $number = $number/10;
        // echo $remender."<br>";
        // echo $number."<br>";
        // echo $total."<br>";
    }
        echo "sum of your digits : $total";
    }
?>
</body>
</html>