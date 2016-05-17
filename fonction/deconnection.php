<?php
session_start();
unset($_SESSION['idutilisateur']);
session_destroy();
header('Location: ../index.php'); 

?>