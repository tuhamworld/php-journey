<?php
session_start();
?>

<html>
    <body>
        <?php

        // Using values gotten from previous sessions

        echo "Favorite color is " . $_SESSION["favColor"] . ". <br/>";
        echo "Favorite animal is " . $_SESSION["favAnimal"] . ". <br/>";

        // Alternatively, you can show all session values using

        print_r($_SESSION);
        ?>
    </body>
</html>