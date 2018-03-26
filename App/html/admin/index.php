<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrativo</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo ASSET;?>css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="<?php echo ASSET;?>css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='<?php echo ASSET;?>css/Open_Sans.css' rel='stylesheet' type='text/css'>    
    <!--Slide Show Css -->
    <link href="<?php echo ASSET;?>ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="<?php echo ASSET;?>css/style.css" rel="stylesheet" />
    <!-- admin CSS -->
    <link href="<?php echo ASSET;?>css/admin.css" rel="stylesheet" />    
</head>
<body class="adm">
<nav>
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fas fa-arrow-circle-right"></i> Principal
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Produtos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="?pag=lista_produtos">Listar</a></li>
                    <li><a href="#">Adicionar</a></li>
                    <li><a href="#">Promoção</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-briefcase"></i> Categorias <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="#">Listar</a></li>
                    <li><a href="#">Adicionar</a></li>
                    <li><a href="#">Promoção</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Servidores <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="#">Listar</a></li>
                  <li><a href="#">Adicionar</a></li>
                  <li><a href="#">Promoção</a></li>
                </ul>


                 <li data-toggle="collapse" data-target="#fornecedores" class="collapsed">
                  <a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Fornecedores <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="fornecedores">
                  <li><a href="#">Listar</a></li>
                  <li><a href="#">Adicionar</a></li>
                  <li><a href="#">Promoção</a></li>
                </ul>




                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Clientes
                  </a>
                  </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-credit-card" aria-hidden="true"></i> Vendas
                  </a>
                </li>
            </ul>
     </div>
</div>
</nav>



<div class="container">
    <div class="row">
         <div class="col-md-3"> </div>
         <div class="col-md-9"> 
            <!-- FAZER OS INCLUDES AKI -->

            <?php



              $pagina = (isset($_GET['pag'])) ? HTML . 'admin/' . $_GET['pag'] . '.php' : null;

              //echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

              if($pagina && file_exists($pagina)){
                include $pagina;
              } 
            ?>





          </div>
         <div class="col-md-0"> </div>
     </div>
</div>

   

    <!--Core JavaScript file  -->
    <script src="<?php echo ASSET;?>js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="<?php echo ASSET;?>js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="<?php echo ASSET;?>ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="<?php echo ASSET;?>ItemSlider/js/jquery.catslider.js"></script>
       <script src="<?php echo ASSET;?>js/main.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>

    <!-- FONTS -->
  
</body>
</html>
