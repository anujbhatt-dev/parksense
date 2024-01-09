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
            height:50vh;
            object-fit:cover;
            object-position:center;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            margin-top: 40px;
        }

        .availability{
            text-align: center;
            
        }
        
        .availability h1{
            color:#5C8374;

        }
        .availability p{
            font-size:5rem;
            margin-top:-10px;
        }
    </style>
</head>
<body>
    <?php include("navbar.php")?>
    <img class="mallA-bigImg" src="mallA.jpg" alt="">
    <?php 
        include("predictAvailability.php");
        $availabilityProbability = predictAvailability($conn);
        $conn->close();
        ?>
    <div class="availability">
        <h1>AVAILABILITY IN FUTURE</h1>
        <p><?php echo $availabilityProbability*100;?>%</p>
    </div>
        
</body>
</html>