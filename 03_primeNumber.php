<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <h1>Check prime or not in php</h1>
    <form action="">
        <input type="number" name="prime" placeholder="Enter any number" require>
        <input type="submit" name="done" value="Check prime number">
    </form>
    <br>
    <?php
    if (isset($_GET['done'])) {
        $number = $_GET["prime"];
        $i = 2;
        $flag = 0;
        while (($number - 1) >= $i) {
            if ($number % $i == 0) {
                $flag = 1;
                break;
            }    
            $i++;
        }

        if ($flag == 0) {
            echo "Prime number : " . $number;
        } else {
            echo "Not Prime number : " . $number;
        }
    }
    ?>
</body>

</html>