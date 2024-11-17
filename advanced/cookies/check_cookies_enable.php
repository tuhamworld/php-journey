<?php
setcookie("test cookie", "test", time() + 3600, "/");
?>

<!-- This file creates a small script that checks whether cookies are enabled. First, we set a test cookies() function and then  use the count COOKIE variable -->

<html>

<body>
    <?php

    if (count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
    ?>
</body>

</html>