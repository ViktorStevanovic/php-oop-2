<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';

$products = [
    $firstToy = new Toy('Chasing fake mouse', 19.99, new Category('cat', 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/cat-icon.png'), 'https://cdn11.bigcommerce.com/s-asivtkjxr8/images/stencil/1280x1280/products/2115/7014/bly00acn3mrwvaiceph8__78953.1630111762.jpg?c=1'),

    $secondToy = new Toy('Good looking bone', 9.99, new Category('dog', 'https://cdn-icons-png.flaticon.com/512/5003/5003972.png'), 'https://m.media-amazon.com/images/I/61R7R5UGtrL.jpg'),

    $firstFood = new Food('Ultra protein dog food', 39.99, new Category('dog', 'https://cdn-icons-png.flaticon.com/512/5003/5003972.png'), 'https://shop.bullymax.com/cdn/shop/files/high-protein-dog-food-pitbulls-2_c50825ba-4dbf-4aeb-9c14-1f84e4ff000a.png?v=1689327104'),

    $secondFood = new Food('Delicous cat food', 29.99, new Category('cat', 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/cat-icon.png'), 'https://www.petscorner.co.uk/media/catalog/product/cache/58ad707f78786f3ec886a36aa0e1d0c2/s/y/symp-cat-salmon.jpg'),

    $firstKennel = new Kennel('Dawg house', 89.99, new Category('dog', 'https://cdn-icons-png.flaticon.com/512/5003/5003972.png'), 'https://5.imimg.com/data5/WL/SR/MY-32219378/dog-kennel.jpg'),

    $secondKennel = new Kennel('Tiny cat kitten', 999.99, new Category('dog', 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/cat-icon.png'), 'https://m.media-amazon.com/images/I/81vxGqW1OjL._AC_SL1500_.jpg'),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <section class="container">
            <div class="row">
                <h1 class="text-center mb-5 mt-5">Animal Shop</h1>
            </div>
        </section>
    </header>
    <main>
        <section class="container">
            <div class="row d-flex justify-content-evenly">
                <?php foreach ($products as $product) { ?>
                    <div class="col-4 mb-5 h-100">
                        <div class="card h-100" style="width: 100%;">
                            <img src="<?php echo $product->imageUrl ?>" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <h5 class="card-title"><?php echo $product->name ?></h5>
                                <p class="card-text">Product type: <?php echo $product->type ?></p>
                                <div class="type-icon mb-3">
                                    <p class="card-text mb-0">Animal: <?php echo $product->category->animal; ?></p>
                                    <img src="<?php echo $product->category->icon; ?>" alt="">
                                </div>
                                <a href="#" class="btn btn-danger">Buy for: <?php echo $product->price ?> </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
</body>

</html>