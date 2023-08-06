<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check any year</title>
</head>

<body>
    <h1>Check Year</h1>
    <form action="">
        <input type="number" name="year" placeholder="Enter any year" require>
        <input type="submit" name="done" value="Check Year">
    </form>
    <br>
    <?php
    // 0 1 1 2 3 5 8 13 21 34
    if (isset($_GET['done'])) {
        $year = $_GET['year'];
        if ($year % 4 == 0 or $year % 400 == 0 and $year % 100 != 0) {
            echo "Leap Year";
        } else {
            echo "Not Leap Year";
        }
    }
    ?>
</body>

</html>