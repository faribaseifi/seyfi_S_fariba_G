<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset_url('css/mdb.min.css') ?>">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,400italic'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>

</head>
<body>
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="<?php echo asset_url('images/image001.png') ?>" height="15"
                         alt="MDB Logo"
                         loading="lazy"/>
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="<?php echo site_url('basket') ?>">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge rounded-pill badge-notification bg-danger" id="all_quantity"><?php echo $total_quantity ?></span>

                </a>

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                       id="navbarDropdownMenuAvatar"
                       role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://lh3.googleusercontent.com/a/AGNmyxavJT293usIKgMhA9PQS228wRo-fCXLvL9YDkeZvg=s288-c-no" class="rounded-circle" height="25"
                             alt="Black and White Portrait of a Man" loading="lazy"/>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

</header>
<!--Main Navigation-->
<main>
    <div class="container">
        <?php
        if($_SERVER['REQUEST_URI'] == '/') {
            include 'products_view.php';
        }elseif ($_SERVER['REQUEST_URI'] == '/basket'){
            include 'basket_view.php';
        }
        ?>
    </div>
</main>
</body>
<script src="https://kit.fontawesome.com/6862f2008a.js" crossorigin="anonymous"></script>
<script src='<?php echo asset_url('js/jquery.js') ?>'></script>
<script src="<?php echo asset_url('js/scripts.js') ?>"></script>
</html>
<?php
/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Add To Cart using HTML Example</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,400italic'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo asset_url('css/style.css'); ?>">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="<?php echo asset_url('css/demo.css'); ?>">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>
<body>
<header class="intro">
    <h1>Sarveno HomeTask</h1>
    <p>A simple add to cart application using Php(MVC MicroFramework),Mysql,HTML,CSS and JavaScript.</p>
</header>

<main>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="wrapper">

        <header class="site-header">
            <div class="inner-wrap">
                <h1>Shopping.</h1>
                <ul class="list-inline">
                    <li><a href="#" class="search"><i class="fa fa-search"></i></a></li>
                    <li>
                        <button class="your-cart js-toggle-cart" data-item-num="3">Your Cart <i
                                    class="fa fa-lg fa-shopping-cart"></i></button>
                    </li>
                </ul>
            </div>
        </header>


        <div class="inner-wrap content-wrap">
            <?php
            include 'products_view.php';
            ?>
        </div>

        <div class="sticky"></div>

    </div>


    <div class="cart">

        <div class="inner-wrap">
            <h2>Your Cart</h2>

            <table class="cart-table">
                <thead>
                <tr>
                    <th class="product-remove">Remove Items</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-line-total">Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <tr id="product-camera">
                    <td>
                        <button type="button" class="product-remove" data-id="product-camera"><i
                                    class="fa fa-times"></i></button>
                    </td>
                    <td>Camera</td>
                    <td class="product-price" data-price="3.99">3.99</td>
                    <td class="product-quantity">
                        <input type="number" pattern="\d*" step="1" min="1" max="5" value="1" data-id="product-camera">
                        <button class="plus js-number-control">
                            <i class="fa fa-plus-square"></i>
                        </button>
                        <button class="minus js-number-control">
                            <i class="fa fa-minus-square"></i>
                        </button>
                    </td>
                    <td class="product-line-total" id="product-camera-total" data-line-total="3.99">3.99</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>
    <!-- END EDMO HTML (Happy Coding!)-->
</main>

<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.0.0/isotope.pkgd.min.js'></script>
<script src="<?php echo asset_url('js/script.js') ?>"></script>

</body>
</html>
*/
?>