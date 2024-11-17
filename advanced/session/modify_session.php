<?php
session_start()
?>
<!-- Modifing a session can be done by just overwriting it -->

<html>
    <body>
        <?php
        $_SESSION["favColor"] = "White";
        print_r($_SESSION);
        ?>
    </body>
</html>