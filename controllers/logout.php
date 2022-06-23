<?php
//jei sesijos nera aktyvios, ja aktyvina, jos sunaikinimui
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//naikinam
session_destroy();
//nukreipia i prisijungimo langa
header('Location: ../views/view.php');
exit;
?>