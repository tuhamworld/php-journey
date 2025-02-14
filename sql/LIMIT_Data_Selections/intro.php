<?php
// MySQL provides a LIMIT clause that is used to specify the number of records to return.

// The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.

// Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". The SQL query would then look like this:

$sql = "SELECT * FROM Orders LIMIT 30";

// The above SQL query will return first 30 seconds

// The below query select records 16-25 (inclusive) returning only 10 records starting from record 16

$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";


// The below is a shorter syntax

$sql = "SELECT * FROM Orders LIMIT 15, 10";

?>