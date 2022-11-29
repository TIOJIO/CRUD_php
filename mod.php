<?php
include_once('config.php');

$a = $_GET['$idi'];

$update = $pdo->prepare("SELECT*FROM etudiant WHERE idetudiant =$a ");
$update->execute();

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT APP</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <section class="signup form">
            <header>MODIFICATION ETUDIANT</header>
            <form  method="POST">
                <?php foreach ($update as $row) : ?>

                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label for="">Nom</label>
                            <input type="text" name="fname" value="<?php echo $row['nom'] ?>">
                        </div>
                        <div class="field input">
                            <label for="">Prenom</label>
                            <input type="text" name="lname" value="<?php echo $row['prenom'] ?>">
                        </div>
                    </div>

                    <div class="field input">
                        <label for="">Date de naissance</label>
                        <input type="" name="date" value="<?php echo $row['date_naissance'] ?>">
                    </div>
                    <div class="name-details">
                        <div class="field input">
                            <label for="">Email</label>
                            <input type="mail" name="email" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="field input">
                            <label for="">Numéro</label>
                            <input type="text" name="numero" value="<?php echo $row['numero'] ?>">
                        </div>
                    </div>

                    <div class=" field button">
                        <!-- <a href="edit.php?$idi='.$id.'"><button>Sauvegarder</button></a> -->
                        <input type="submit" name="send" value="Sauvegarder">
                    </div>
                <?php endforeach ?>

            </form>

        </section>

    </div>
    <?php

    include_once('config.php');

    if (isset($_POST['send'])) {
        $nom = $_POST['fname'];
        $prenom = $_POST['lname'];
        $dates = $_POST['date'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
   
   
        $mod = $pdo->prepare("UPDATE etudiant SET nom='$nom',prenom='$prenom', date_naissance='$dates', email='$email', numero=$numero  WHERE idetudiant=$a");
        $mod->execute();
        header("location:tableau.php");
    }
    ?>


</body>

</html>