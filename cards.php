<link rel="stylesheet" href="cards.css">
<div class="card-wrapper">
        <div class="card">
            <div class="mall-details">
                <img class="mall-img" src="mallA.jpg" alt="mall a image">
              <h3 class="mall-name">Mall A</h3>
          </div>
          <div class="total-wrapper">

                <div class="total">
                    <h4 class="total-head">
                            Available Space
                        </h4>
                        <p class="total-count">
                            <?php
                                include("calculateAvailableSpace.php");
                                $availableSpace = calculateAvailableSpace($conn);
                                echo $availableSpace;
                            ?>
                        </p>
                    </div>
                    <div class="total">
                        <h4 class="total-head">
                            Total Space
                        </h4>
                        <p class="total-count">50</p>
                    </div>
                </div>
            <a href="mallAData.php" class="card-btn">Details</a>
        </div>


        <div class="card">
          <div class="mall-details">
              <img class="mall-img" src="mallB.jpg" alt="mall a image">
              <h3 class="mall-name">Mall B</h3>
          </div>
          <div class="total-wrapper">

                <div class="total">
                    <h4 class="total-head">
                            Available Space
                        </h4>
                        <p class="total-count">3</p>
                    </div>
                    <div class="total">
                        <h4 class="total-head">
                            Total Space
                        </h4>
                        <p class="total-count">3</p>
                    </div>
            </div>
            <a href="mallBData.php" class="card-btn">Details</a>
        </div>
      </div>