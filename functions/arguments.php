<?php
// Information can be passed to functions as variables via Arguments. An argument is just like a variable.

function statesVisited($stateName, $reasonOfVisit){
    echo "<li>I visited $stateName State for $reasonOfVisit purposes</li> <br/>";
}

statesVisited("Oyo", "Residential");
statesVisited("Osun", "Recreational");
statesVisited("Ogun", "Residential");
statesVisited("Ondo", "Education");
statesVisited("Edo", "Family visit");
statesVisited("Lagos", "Professional");


?>