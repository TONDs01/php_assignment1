<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci series</title>
</head>
<body>
<h1>Fibonacci Series</h1>
    <form action="">
        <input type="number" name="fibonacci" placeholder="Enter any number" require>
        <input type="submit" name="done" value="Fibonacci Series">
    </form>
    <br>
    <?php
    // 0 1 1 2 3 5 8 13 21 34
if (isset($_GET['done'])) {
    $number = $_GET['fibonacci'];
    $fibonacci = $number;
    $len = strlen($number);
    $a = 0;    
    $b = 1;
    echo $a." ".$b;
    $fibo = 0;
    $sum = 0;
    for ($i=1; $i <= $number+$len ; $i++) { 
        
    $fibb = $a;
    $a = $b;
    $b = $fibb;
    $fibb = $a + $b;
    $b += $a;
    echo " ".$b;
    }
}
?>
</body>
</html>