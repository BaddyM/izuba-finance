<?php

$title = 'Izuba Finance';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="vendor/custom/style.css">



    <!--- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Other external css -->
    <link rel="stylesheet" href="vendor/aos/aos.css">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">

    <link href="https://fonts.cdnfonts.com/css/rothenberg" rel="stylesheet">

    <!-- Animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>

<body>

<!--    <div id="loader-div">
        <img class="img-loader" src="vendor/loaders/loader.gif" alt="">
    </div>
-->
    <header>
        <div class="brand rothen animate__animated animate__bounceIn">
            IZUBA FINANCE
        </div>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="index">Home</a></li>
                <li><a class="menu__item" href="loans">Loans</a></li>
                <li><a class="menu__item" href="consult">Consult</a></li>
                <li><a class="menu__item" href="investors">Investment</a></li>
                <li><a class="menu__item" href="wedo">About</a></li>
                <li><a class="menu__item" href="contact">Contact Us</a></li>
            </ul>
        </div>
    </header>