<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number</title>
</head>

<body>
    <h1>Palindrome Number</h1>
    <form action="">
        <input type="number" name="palindrome" placeholder="Enter any number" require>
        <input type="submit" name="done" value="Palindrome Number">
    </form>
    <br>
    <?php

    if (isset($_GET['done'])) {
        $number = $_GET['palindrome'];
        $palindrome = $number;
        $len = strlen($number);
        $rem = 0;
        $pali = 0;
        for ($i=1; $i <= $number+$len; $i++) { 
            $rem = $number % 10;
            $pali = $pali * 10 + $rem;
            $number = $number/10;
        }
        if($palindrome == $pali)
        {
            echo "Palindrome Number = ".$palindrome;
        }
        else
        {
            echo "Not Palindrome Number = ".$palindrome;
        }
    }
    ?>
</body>

</html>