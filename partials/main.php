<main class="main-container">
    <?php
    foreach ($usedCars as $car) { ?>
        <div class="car-container">
            <?php foreach ($car as $key => $value) {
                if ($key == 'photo') {
                    if ($value == '') {
                        echo '<img class="car-photo" src="https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png" />';
                    } else {
                        echo '<img class="car-photo" src="' . $value . '" />';
                    }
                } else {
                    echo '<h4>' . $key . ':' . $value . '</h4>';
                }
            }
            ?>
        </div>

    <?php
    }
    ?>
</main>