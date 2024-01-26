<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Toy.php';


$firstToy = new Toy('Chasing fake mouse', 19.99, new Category('cat', 'https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/cat-icon.png'), 'https://cdn11.bigcommerce.com/s-asivtkjxr8/images/stencil/1280x1280/products/2115/7014/bly00acn3mrwvaiceph8__78953.1630111762.jpg?c=1')

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
        <h1 class="text-center">Animal Shop</h1>
    </header>
    <main>
        <section class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $firstToy->imageUrl ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $firstToy->name ?></h5>
                            <p class="card-text">Product type: <?php echo $firstToy->type ?></p>
                            <div class="type-icon mb-3">
                                <p class="card-text mb-0">Animal: <?php echo $firstToy->category->animal; ?></p>
                                <img src="<?php echo $firstToy->category->icon; ?>" alt="">
                            </div>

                            <a href="#" class="btn btn-primary">Buy for: <?php echo $firstToy->price ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>