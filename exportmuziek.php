<?php
 // connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'watchlist');
 
  // connectie checken
  if(!$conn){ 
    echo 'connectie error:' . mysqli_connect_error();
  }

  // query schrijven voor alle producten
  $sql = 'SELECT id, titel, artiest, minuten, seconden, foto, locatie, watched FROM muziek_tb';

  //query maken en resultaat ophalen
  $result = mysqli_query($conn, $sql);


  //kolom resultaat ophalen als 'array'
  $muziek_tb = mysqli_fetch_all ($result, MYSQLI_ASSOC);

  //connectie afbreken
  mysqli_close($conn);
  ?>