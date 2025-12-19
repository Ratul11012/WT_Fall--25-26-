<?php
// Declare variables
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hello, PHP!";

// Perform arithmetic operations
$sum = $integerVar + $floatVar;
$difference = $integerVar - $floatVar;
$product = $integerVar * $floatVar;
?>

<!DOCTYPE html>
<html>
<head>
       <title>PHP Variables and Operations</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}
h1 {
    color: #4CAF50;
}
p {
    font-size: 16px;
}
h3 {
    color: #555;
}
</style>
<center>
    <fieldset>
<body>
    <h1>Working with PHP Variables</h1>

    <p>Integer Value: <?php echo $integerVar; ?> 
    (Type: <?php echo gettype($integerVar); ?>)</p>
    <p>Float Value: <?php echo $floatVar; ?> 
    (Type: <?php echo gettype($floatVar); ?>)</p>
    <p>String Value: <?php echo $stringVar; ?> 
    (Type: <?php echo gettype($stringVar); ?>)</p>

    <h3>Arithmetic Operations</h3>
    <p>Sum of Integer and Float: 
        <?php echo $sum; ?></p>
    <p>Difference of Integer and Float: 
        <?php echo $difference; ?></p>
    <p>Product of Integer and Float: 
        <?php echo $product; ?></p>
       
            </fieldset>
        </center>
</body>
</html>