<?php

include_once __DIR__ . '/classi/accessory.php';
include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/toy.php';

$categories = [
    'gatto' => new Category('gatto', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new Category('cane', '<i class="fa-solid fa-dog"></i>'),
    'pesce' => new Category('pesce', '<i class="fa-solid fa-fish"></i>'),
    'uccello' => new Category('uccello', '<i class="fa-solid fa-dove"></i>'),
    'tartaruga' => new Category('tartaruga', '🐢'),
];
$products = [
    new Food('Monge', 49.50, 'https://picsum.photos/200', true, $categories['gatto'], '10kg', 'riso e salmone'),
    new Food('Royal Canin', 94.50, 'https://picsum.photos/200', true, $categories['cane'], '100kg', 'tacchino'),
    new Food('Prestige', 32.50, 'https://picsum.photos/200', true, $categories['uccello'], '20kg', 'semi'),
    new Food('Monge', 09.50, 'https://picsum.photos/200', true, $categories['pesce'], '2kg', 'riso e proteine'),
    new Food('Expecial acquario', 7.50, 'https://picsum.photos/200', true, $categories['tartaruga'], '2kg', 'stick di proteine'),
];
//  var_dump($products);
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>oop 2 </title>

    <!-- FontAwesome 6.2 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Bootstrap 5.2 css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='assets/style.css'>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach($products as $elem){ ?>
                <div class="col-4 g-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $elem->image ?>" class="card-img-top" alt="<?php echo $elem->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $elem->name ?></h5>
                            <div>
                             <span><?php echo $elem->category->icon ?></span>
                             <span><?php echo $elem->category->name ?></span>
                            </div>
                            <div>
                                <span>
                                    Prezzo:  <?php echo $elem->price ?>
                                </span>
                            </div>
                            <p class="card-text"></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, fugiat! Vel, laborum error officia</p>
                            <p class="text-secondary">Ingredienti: <?php echo $elem->ingredients ?> </p>
                            <a href="#" class="btn btn-info"> Aggiungere al carrello <i class="fa-solid fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php  ?>

    <!-- Bootstrap 5 script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js' integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
    </script>


    <!-- Mio script -->
    <script src='.assets/main.js'></script>
</body>

</html>