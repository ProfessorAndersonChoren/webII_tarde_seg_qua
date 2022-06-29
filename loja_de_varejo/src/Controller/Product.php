<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

if (empty($_POST)) {
    echo "Você não deveria estar aqui!!!";
    exit;
}

$productName = $_POST["name"];
$productPrice = $_POST["price"];
$productQuantity = $_POST["quantity"];
