<?php 
$nameUser = "Ronaldo";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>

<body>
    <h2>Hello <?php echo $nameUser; ?></h2>
    <h2>Hello <?php echo "echo"; ?></h2>
    <h2>Hello <?php print "print"; ?></h2>
    <h2>Hello <?php print_r('print_r'); ?></h2>
    <h2>Hello <?php var_dump('var_dump'); ?></h2>
    <?php
        echo "<p>HTML in PHP</p>"
    ?>
</body>

</html>