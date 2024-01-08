<?php
  include("dbConnection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mallA-bigImg{
            width:100%;
            height:60vh;
            object-fit:cover;
            object-position:center;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <?php include("navbar.php")?>
    <img class="mallA-bigImg" src="mallA.jpg" alt="">
    <?php include("fetchEntryData.php");?>
    <?php 
        include("fetchOutData.php");
        $conn->close();
    ?>
</body>
</html>