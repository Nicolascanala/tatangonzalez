<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tatan Gonzalez</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css" />
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css" />

    <!-- These two JS are loaded at the top for gray scale including the loader. -->

    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- jQuery (https://jquery.com/download/) -->

    <script>
        var tm_gray_site = false

        if (tm_gray_site) {
            $('html').addClass('gray')
        } else {
            $('html').removeClass('gray')
        }
    </script>

    <script>
        function showPicture() {
            var sourceOfPicture = 'imga/FFO1.jpg'
            var img = document.getElementById('bigpic')
            img.src = sourceOfPicture.replace('90x90', '225x225')
            img.style.display = 'block'
        }
    </script>

    <script>
        function hidePicture() {
            var sourceOfPicture = 'imga/logo-tatan.png'
            var img = document.getElementById('bigpic')
            img.src = sourceOfPicture.replace('90x90', '225x225')
            img.style.display = 'none'
        }
    </script>

    <script>
        function showPictureOne() {
            var sourceOfPicture = 'imga/FFO2.jpg'
            var img = document.getElementById('one')
            img.src = sourceOfPicture.replace('90x90', '225x225')
            img.style.display = 'block'
        }
    </script>

    <script>
        function hidePictureOne() {
            var sourceOfPicture = 'imga/logo-tatan.png'
            var img = document.getElementById('one')
            img.src = sourceOfPicture.replace('90x90', '225x225')
            img.style.display = 'none'
        }
    </script>
</head>

<body>
    <!-- Content -->
    <!-- <div class="cd-hero"> -->
    <div>
        <?php require('nav.php') ?>

        <!-- <ul class="cd-hero-slider"> -->
        <ul class="">