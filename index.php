<?php
require_once "./classes/Prodotto.php";
require_once "./classes/Categoria.php";
$productsList = [
    $nuovoProdotto = new Categoria("Ghigliottina", "2.99", "https://picsum.photos/200", "Giocattolo", "", "Gatto"),
    $nuovoProdotto_2 = new Categoria("Frusta", "4.99", "https://picsum.photos/200", "Cibo", "", "Cane"),
    $nuovoProdotto_3 = new Categoria("Cuccia Morbida", "14.99", "https://picsum.photos/200", "Cuccia", "", "Gatto")
];
echo '<pre>';
echo 'Prodotto'.'<br />';
print_r($nuovoProdotto);
echo '</pre>';

echo '<pre>';
echo 'Prodotto 2'.'<br />';
print_r($nuovoProdotto_2);
echo '</pre>';

echo '<pre>';
echo 'Prodotto 3'.'<br />';
print_r($nuovoProdotto_3);
echo '</pre>';

