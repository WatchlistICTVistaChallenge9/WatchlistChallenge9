<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "watchlist";

$conn = new mysqli($servername, $username, $password, $database);

$watched = "watched";