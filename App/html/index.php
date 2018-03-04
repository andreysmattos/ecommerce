<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />


</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container">
        <?php
            include 'promotion.php';
        ?>
        <!-- /.row -->
        <div class="row">
            <?php
                include 'menu_esquerda.php';

            ?>
            <!-- /.col -->
            <?php
                include 'produtos.php';
            ?>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


    <!-- download APP -->
    <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>
    </div>
<!-- /download APP -->


    <?php

        include 'footer.html';
    ?>

    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
       <script src="assets/js/main.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
