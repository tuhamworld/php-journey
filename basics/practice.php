<?php
$name="Tunde";
$job = "Web Designer";

// Using global keywords to use a variable inside function
function MyProfile(){
	global $name, $job;
    $GLOBALS['name'] = "Tuham";
    echo "<h2>$name is a $job</h2>";
}

MyProfile();


// Using static to hold a variable after executed
function AddNum(){
	static $x = 2;
    echo "<p>$x</p>";
    $x++;
}


AddNum();
AddNum();
AddNum();

?>