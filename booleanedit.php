
<?php

include_once 'db.php';

$id = $_GET['id'];

$conn->query('UPDATE films_tb SET watched = 1 where id = '.$id);


?>