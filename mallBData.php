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

        .spaces{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding: 10px 20px;
            text-align:center;

        }

        .space{
            height:20vh;
            flex:.3;
            border:1px solid rgba(0,0,0,0.54);
            border-radius:20px;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            background-color:#092635;
            color:white;
        }

        .space h4{
            font-weight:100;
        }

        .space p{
            font-size:2rem;
            text-transform:uppercase;
        }
    </style>
</head>
<body>
    <?php include("navbar.php")?>
    <img class="mallA-bigImg" src="mallB.jpg" alt="">
    <?php 
        include("predictAvailability.php");
        $availabilityProbability = predictAvailability($conn);
    ?>
    <div class="spaces">
        <div class="space">
            <h4>space 1</h4>
            <?php
                $space1query = "SELECT status FROM park_space where id=1";
                $space1 = $conn->query($space1query); 
                $row1=$space1->fetch_assoc();
                $space2query = "SELECT status FROM park_space where id=2";
                $space2 = $conn->query($space2query); 
                $row2=$space2->fetch_assoc();
                $space3query = "SELECT status FROM park_space where id=3";
                $space3 = $conn->query($space3query); 
                $row3=$space3->fetch_assoc(); 
                // echo $space2;
                // echo $space3;       
            ?>
            <p><?php
                if($row1['status']){
                    echo "Occupied";
                }else{
                    echo "Avalaible";
                }
            ?></p>
        </div>
        <div class="space">
            <h4>space 2</h4>
            <p><?php
                if($row2['status']){
                    echo "Occupied";
                }else{
                    echo "Avalaible";
                }
            ?></p>
        </div>
        <div class="space">
            <h4>space 3</h4>
            <p><?php
                if($row3['status']){
                    echo "Occupied";
                }else{
                    echo "Avalaible";
                }
            ?></p>
        </div>
    </div>
    
        
</body>
</html>