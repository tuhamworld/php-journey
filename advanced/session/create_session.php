<?php
session_start()
?>
<!-- Note: The session_start() function must be the very first thing in your document. Before any HTML tags. -->

<html>
    <body>
        <?php

// Setting session variables
        $_SESSION["favColor"] = "blue";
        $_SESSION["favAnimal"] = "hen";

        echo "Session variables have been set";


        ?>
    </body>
</html>