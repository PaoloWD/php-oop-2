<?php
require_once "./classes/Prodotto.php";
require_once "./classes/Categoria.php";
$productsList = [
    $nuovoProdotto = new Categoria("Ghigliottina", "€2.99", "https://loremflickr.com/320/240/cat", "Giocattolo", "", "Gatto"),
    $nuovoProdotto_2 = new Categoria("Frusta", "€4.99", "https://loremflickr.com/320/240/dog", "Cibo", "", "Cane"),
    $nuovoProdotto_3 = new Categoria("Cuccia Morbida", "€14.99", "https://loremflickr.com/320/240/cat", "Cuccia", "", "Gatto")
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

echo '<pre>';
echo 'Prodotto 3'.'<br />';
print_r($nuovoProdotto_3->getImage());
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>PET SHOP</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <?php foreach ($productsList as $product){ ?>
        <div class="card" style="width: 18rem;">
        <img src=<?php echo $product->getImage() ?> class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product->getName() ?></h5>
            <p class="card-text"><h6>Categoria Prodotto</h6><?php echo $product->getCategory_name() ?></p>
            <p class="card-text"><h6>Animale Prodotto</h6><?php echo $product->getType() ?></p>
            <p class="card-text"><h6>Icona Animale</h6><i class="<?php echo $product->getIcon() ?>"></i></p>
            <p class="card-text"><h6>Prezzo</h6><?php echo $product->getPrice() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a> 
        </div>
        </div>
        <?php } ?>

    </div>
</body>
</html>
