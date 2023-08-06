<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h1>Write any number and print table of this number</h1>
    <form action="">
        <input type="number" name="table" placeholder="Enter any table nunber" require>
        <input type="submit" name="done" value="Table">
    </form>
    <br>
    <?php
        if(isset($_GET['done'])){
            $number = $_GET['table'];
            for ($i=1; $i <= 10; $i++) { 
                $table = $number * $i;
                echo $number." x ".$i." = ".$table."<br>"; 
            }
        }
    ?>
</body>
</html>