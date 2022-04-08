<?php

require "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
</head>
<link rel="stylesheet" href="addmoviecss.css">
<body>

<a href='index.php'><button class="backaddmovie"> Back   </button></a>

<p> Muziek Toevoegen </p>
    
    <div class="links"> 

<form method="POST">
    <input type="text" placeholder="titel" name="titel" class="invoervelden"> <br>

    <input type="text" placeholder="Artiest" name="artiest" class="invoervelden"> <br>

    <input type="text" placeholder="images/000.png" name="foto" class="invoervelden"> <br>
    
    </div><div class="rechts"> 

    <select id="applicatie" name="locatie" class="invoervelden"> 
        <option value = " "> Selecteer een applicatie </option>
        <option value = "Youtube"> Youtube </option>
        <option value = "Spotify"> Spotify </option>
        <option value = "Soundcloud"> Soundcloud </option>
    </select> <br>
  
        <input type="number" placeholder="minuten" name="minuten" class="invoerminuten"> <div class="mintext"> <b>minuten</b> </div> <br>

        <input type="number" placeholder="seconden" name="seconden" class="invoerseconden"> <div class="sectext"> <b>seconden</b> </div> <br>
    
    </div>

        <button type="submit" name="submit" class="toevoegen"> Toevoegen </button>

   
</form>

    <?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include_once 'insertmusicdb.php';
}
?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>