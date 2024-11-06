<?php
require 'Config.php';
require 'Connexion.php';

$connexion = new Connexion();
$pdo = $connexion->getConn();

if ($pdo) {
    echo "connecter";
} else {
    echo "fail";
}
