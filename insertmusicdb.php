<?php
$titel = $_POST['titel'];
$artiest = $_POST['artiest'];
$minuten = $_POST['minuten'];
$foto = $_POST['foto'];
$locatie = $_POST['locatie'];
$seconden = $_POST['seconden'];

mysqli_query($conn, "INSERT INTO muziek_tb (titel, artiest, minuten, foto, locatie, seconden) VALUES ('$titel', '$artiest', '$minuten', '$foto', '$locatie', '$seconden')");