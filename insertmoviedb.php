<?php
$titel = $_POST['titel'];
$regisseur = $_POST['regisseur'];
$minuten = $_POST['minuten'];
$foto = $_POST['foto'];
$locatie = $_POST['locatie'];
$hoofdrolspeler = $_POST['hoofdrolspeler'];

mysqli_query($conn, "INSERT INTO films_tb (titel, regisseur, minuten, foto, locatie, hoofdrolspeler) VALUES ('$titel', '$regisseur', '$minuten', '$foto', '$locatie', '$hoofdrolspeler')");