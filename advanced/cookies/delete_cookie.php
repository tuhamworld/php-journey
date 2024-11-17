<?php
setcookie("example user", "", time() - 3600);
?>

<!-- To delete a cookie, set the expiration period to one hour ago -->
 <html>

 <body>
 <?php
 echo "Cookie 'user' is deleted ";
 ?>

 </body>
 </html>