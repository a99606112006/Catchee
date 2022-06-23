<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'chenweij-db';
$dbuser = 'chenweij-db';
$dbpass = 'lQOG7LXENsKJ9DNx';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
