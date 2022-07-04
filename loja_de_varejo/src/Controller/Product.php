<?php

namespace APP\Controller;

use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if (empty($_POST)) {
    Redirect::redirect(
        message: 'Requisição inválida!!!',
        type: 'error'
    );
}

$productName = $_POST["name"];
$productPrice = $_POST["price"];
$productQuantity = $_POST["quantity"];
