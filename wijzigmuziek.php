<?php
    include_once 'db.php';
    if(count($_POST)>0) {
        if(isset($_POST['frmUpdate'])) {
            mysqli_query($conn,"UPDATE muziek_tb set titel='" . $_POST['titel'] . "', artiest='" . $_POST['artiest'] . "', seconden='" . $_POST['seconden'] . "', foto='" . $_POST['foto'] . "', locatie='" . $_POST['locatie'] . "', minuten='" . $_POST['minuten'] . "' WHERE id='" . $_GET['id'] . "'");
            $message = "Product is gewijzigd";
        }
    }

    $id = $_GET['id'];
    $result = mysqli_query($conn,"SELECT * FROM muziek_tb WHERE id = '$id'");
    $row= mysqli_fetch_array($result);
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Wijzig</title>
    </head>

    <body>

    <a href="index.php"><button></button></a>

        <form name="frmUser" method="post" action="">
            <div>
                <?php if(isset($message)) { echo $message; } ?>
            </div>
            
            <h1 style="font-size: 15px;color: black;">Titel:</h1>
            <input autocomplete="off" type="text" name="titel" class="txtField" value="<?php echo $row['titel']; ?>">
            <br>
            <br>
            <h1 style="font-size: 15px;color: black;margin-top: 20px;">Artiest:</h1>
            <input autocomplete="off" type="text" name="artiest" class="txtField" value="<?php echo $row['artiest']; ?>">
            <br>
            <br>
            <h1 style="font-size: 15px;color: black;margin-top: 20px;">Minuten:</h1>
            <input autocomplete="off" type="text" name="minuten" class="txtField" value="<?php echo $row['minuten']; ?>">
            <br>
            <br>
            <h1 style="font-size: 15px;color: black;margin-top: 20px;">Seconden:</h1>
            <input autocomplete="off" type="text" name="seconden" class="txtField" value="<?php echo $row['seconden']; ?>">
            <br>
            <br>
            <h1 style="font-size: 15px;color: black;margin-top: 20px;">Foto:</h1>
            <input autocomplete="off" type="text" name="foto" class="txtField" value="<?php echo $row['foto']; ?>">
            <br>
            <br>
            <h1 style="font-size: 15px;color: black;margin-top: 20px;">Locatie:</h1>
            <input autocomplete="off" type="text" name="locatie" class="txtField" value="<?php echo $row['locatie']; ?>">
            <br>
            <input type="hidden" name="frmUpdate" value="frmUpdate" />
            <input type="submit" name="submit" class="submit_button" value="Update">



        </form>
    </body>
</html>