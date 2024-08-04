<?php

// PHP can have default arguments in its functions

function eventsYear($year = 2024){
    echo "In the $year <br/>";
}

eventsYear(2017);
eventsYear(2018);
eventsYear(2014);
eventsYear();

?>