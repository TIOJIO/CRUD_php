<?php


include_once('config.php');
if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM etudiant WHERE idetudiant=$a");
    $delete->execute();
    header("location:tableau.php");
} else {
    echo "échec";
}
