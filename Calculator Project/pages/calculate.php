<?php

require_once "../classes/calculator.php";

$num1 = intval($_GET["first-number"]) ?? 0;
$num2 = intval($_GET["second-number"]) ?? 0;
$operation = $_GET["operation"] ?? "+";

$calculator = new Calculator();

//set values
$calculator->setNumberOne($num1);
$calculator->setNumberTwo($num2);

//calculate
$calculator->calculate($operation);

//return result
$result = $calculator->getTotal();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CDN STYLE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>Result Of <?= $num1 . $operation . $num2 ?></h1>
            <p class="lead"><?= $result ?></p>
        </div>
        <!-- Bootstrap CDN SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- jQuery CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- External JS -->
        <script src="../js/main.js"></script>
</body>

</html>