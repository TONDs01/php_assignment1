<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>

<body>
    <h1>Armstrong Number</h1>
    <form action="">
        <input type="number" name="armstrong" placeholder="Enter any number" require>
        <input type="submit" name="done" value="Armstrong Number">
    </form>
    <br>
    <?php
    if (isset($_GET['done'])) {
        $number = $_GET['armstrong'];
        $armstrong = $number;
        $rem = 0;
        $arms = 0;
        for ($i = 1; $i <= strlen($number); $i++) {
            $rem = $number % 10;
            $num = $rem * $rem * $rem;
            $number = $number / 10;
            $arms += $num;
        }

        if ($armstrong == $arms) {
            echo "Armstrong Number " . $armstrong;
        } else {
            echo "Not Armstrong Number " . $armstrong;
        }
    }
    ?>
</body>

</html>