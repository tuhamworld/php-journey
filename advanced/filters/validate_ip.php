<?php
// Validating IP Address


$ip_address = "127.0.0.1";

if (!filter_var($ip_address, FILTER_VALIDATE_IP) === false) {
  echo("$ip_address is a valid IP address <br/>");
} else {
  echo("$ip_address is not a valid IP address <br/>");
}



?>