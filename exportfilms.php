<?php
 // connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'watchlist');
 
  // connectie checken
  if(!$conn){ 
    echo 'connectie error:' . mysqli_connect_error();
  }

  // query schrijven voor alle producten
  $sql = 'SELECT id, titel, regisseur, foto, locatie, hoofdrolspeler, watched, minuten FROM films_tb';

  //query maken en resultaat ophalen
  $result = mysqli_query($conn, $sql);


  //kolom resultaat ophalen als 'array'
  $films_tb = mysqli_fetch_all ($result, MYSQLI_ASSOC);

  //connectie afbreken
  mysqli_close($conn);
  ?>