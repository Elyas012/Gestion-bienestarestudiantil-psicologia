<?php
$conex = mysqli_connect("localhost","root","","bienestar");
if (!$conex) {
    die("Error BDD: " . mysqli_connect_error());
}

