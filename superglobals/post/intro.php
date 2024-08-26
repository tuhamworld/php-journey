<?php

// POST can be done via;

// - HTML forms

// <form method="post" action="demo.php">

// <input type="text" placeholder="First Name" name="fname"/>
// <input type="submit"/>
// </form>



// - JavaScript functions

// function myfunction() {
//     const xhttp = new XMLHttpRequest();
//     xhttp.open("POST", "demo_phpfile.php");
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.onload = function() {
//       document.getElementById("demo").innerHTML = this.responseText;
//     }
//     xhttp.send("fname=Tunde");
//     }
//   }


// The above Javascript functions will

// Intiate a HTTP request
// Set the HTTP method to POST
// Set a valid request header
// Create a function to execute when the request is done
// Send the HTTP request with a variable fname set to Tunde

?>