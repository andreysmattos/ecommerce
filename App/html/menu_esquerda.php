<?php

$c = new App\classes\Categoria();
$menu = $c->menu_esquerda();
$i = 1;
?>

<div class="col-md-3">

    <?php foreach($menu as $key=>$item): $i++;?>
        <div>
            <a href="#" class="list-group-item active <?php echo ($i % 2 == 0) ? '' : 'list-group-item-success'; ?>"><?php echo $key; ?>
            </a>
            <ul class="list-group">

                <?php foreach($item as $key2=>$categoria): ?>

                <li class="list-group-item"> <?php echo $categoria['nome'] ?>
                  <span class="label label-primary pull-right"><?php echo $categoria['quantidade'] ?></span>
              </li>
                <?php endforeach ?>
              
             </li>
         </ul>
     </div>
     <!-- /.div -->

    <?php endforeach ?>

 <!-- /.div -->
 <div>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
        <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
        <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
        <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
    </ul>
</div>
<!-- /.div -->
<div class="well well-lg offer-box offer-colors">


    <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT                 

    <br />
    <br />
    <div class="progress progress-striped">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
        style="width: 70%">
        <span class="sr-only">70% Complete (success)</span>
        2hr 35 mins left
    </div>
</div>
<a href="#">click here to know more </a>
</div>
<!-- /.div -->
</div>