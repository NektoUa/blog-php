PHP
<?php
$servername = "127.0.0.1";
$username = "newuser";
$password = "The78.Mel";
$DBname = "blog";

$mysqli = new mysqli($servername, $username, $password, $DBname);

if ($mysqli->connect_error) {
    printf("Soryan: %s\n", $mysqli->connect_error);
    exit();
};
