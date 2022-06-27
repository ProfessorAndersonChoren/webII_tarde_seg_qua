<?php
$productName = $_POST["name"];
$productPrice = $_POST["price"];
$productQuantity = $_POST["quantity"];

echo "<p>Nome do produto: $productName</p>";
echo "<p>Preço de venda: $productPrice</p>";
echo "<p> Quantidade em estoque: $productQuantity";