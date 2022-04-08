<?php

require 'db.php';

include_once 'exportfilms.php';

include_once 'exportmuziek.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="addmusic.php" class="addmusic"><div>+</div></a>
    
    <div class="muziektitelboven">MUZIEK</div>

    <a href="addmovie.php" class="addmovie"><div>+</div></a>

    <div class="filmtitelboven">FILM</div>

    <div class="vbalk"></div>
    
    <div class="hbalk"></div>

    <div class="hbalk2"></div>



    <div class="plek1">
        <?php foreach ($muziek_tb as $muziek): ?>
            <div class="muziekkaart">
                <p class="muziektitel"><?= $muziek['titel']; ?> </p>
                <p class="muziekartiest">Made by: <?= $muziek['artiest'];?></p>
                <p class="muziekminuten"> <?= $muziek['minuten'];?> Minuten en </p>
                <p class="muziekseconden"> <?= $muziek['seconden'];?> Seconden </p>
                <img  class ='muziekfoto' src= <?=  $muziek['foto']; ?> >
                <a href="booleanedit.php?id=<?= $muziek['id']?>"target="Iframe"><img class="vinkjebutton" src="images/vinkje.png"> </a>
                <iframe name="Iframe" style="display:none"></iframe>
                <p class="muzieklocatie"> <?= $muziek['locatie'];?></p>
                <a href="deletemuziek.php?id=<?= $muziek['id']?>"><img class="delete" src="images/trash.png"></a>
                <a href="wijzigmuziek.php?id=<?= $muziek['id']?>"><img class="wijzig" src="images/pencil.png"></a>

            </div>
        <?php endforeach; ?>
    </div>
    


    </div>



    <div class="plek2">
        <?php foreach ($films_tb as $films): ?>
            <div class="filmkaart">
            <p class="filmtitel"><?= $films['titel']; ?> </p>
            <p class="filmregisseur">Written by: <?= $films['regisseur']; ?> </p>
            <p class="filmminuten"> <?= $films['minuten']; ?> Minuten </p>
            <img  class ='filmfoto' src= <?=  $films['foto']; ?> >
            <p class="filmhoofdrolspeler"> Hoofdrolspeler: <?= $films['hoofdrolspeler']; ?> </p>
            <a href="booleanedit.php?id=<?= $films['id']?>"target="Iframe"><img class="vinkjebutton" src="images/vinkje.png"> </a>
            <iframe name="Iframe" style="display:none"></iframe>
            <p class="filmlocatie"> Applicatie: <?= $films['locatie']; ?></p>
            <a href="deletefillms.php?id=<?= $films['id']?>"><img class="delete" src="images/trash.png"></a>
            <a href="wijzigfilm.php?id=<?= $films['id']?>"><img class="wijzig" src="images/pencil.png"></a>


        </div>

        <?php endforeach; ?></div>
        
    
</body>
</html>
