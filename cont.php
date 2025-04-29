<?php

$echo = '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prodaa.css">
</head>
<body>
    


<div class="general_container">

<div class="container_left">
   <div class="left">
       <form action="" method="post" class="form_left">
           <input type="checkbox" name="masc" id=""> Masculino
           <input type="checkbox" name="fem" id=""> Feminino
           <input type="checkbox" name="inf" id=""> Infantil
           <input type="checkbox" name="all" id=""> Todos
           <input type="submit" name="bts" value="Filtrar">
       </form>
   </div>
</div>

<div class="container-right">
<div class="teste">

<?php

include_once("config.php");

    if (isset($_POST["bts"]) && isset($_POST["masc"])){

    $view = "SELECT * FROM test WHERE genero = "masc"";
    $resp = $conn -> query($view);

   while($view = mysqli_fetch_assoc($resp)){

?>



<div class="test">

   <div class="img_container">
       <img src="<?php echo $view["caminhoimg"] ?>" alt="" id="img_container">

       <div class="heart_img">

           <img src="project_imgs/heartIcon.png" alt="" class="heart">

       </div>

       <div class="mark_container">
           <?php echo $view["marca"] ?>
       </div>
   </div>

   <div class="name_container">
       <?php echo $view["nome"] ?>
   </div>

   <div class="price_container">
       <?php echo "R$ ".$view["valor"] ?>
   </div>

</div>    

<?php

}
}

if (isset($_POST["bts"]) && isset($_POST["fem"])){

$view = "SELECT * FROM test WHERE genero = "fem"";
$resp = $conn -> query($view);

  while($view = mysqli_fetch_assoc($resp)){

?>

<div class="test">

   <div class="img_container">
       <img src="<?php echo $view["caminhoimg"] ?>" alt="" id="img_container">

       <div class="heart_img">

           <img src="project_imgs/heartIcon.png" alt="" class="heart">

       </div>

       <div class="mark_container">
           <?php echo $view["marca"] ?>
       </div>
   </div>

   <div class="name_container">
       <?php echo $view["nome"] ?>
   </div>

   <div class="price_container">
       <?php echo "R$ ".$view["valor"] ?>
   </div>

</div>    

<?php

}
}
?>

<?php

if (isset($_POST["bts"]) && isset($_POST["inf"])){

$view = "SELECT * FROM test WHERE genero = "inf"";
$resp = $conn -> query($view);

  while($view = mysqli_fetch_assoc($resp)){

?>

<div class="test">

   <div class="img_container">
       <img src="<?php echo $view["caminhoimg"] ?>" alt="" id="img_container">

       <div class="heart_img">

           <img src="project_imgs/heartIcon.png" alt="" class="heart">

       </div>

       <div class="mark_container">
           <?php echo $view["marca"] ?>
       </div>
   </div>

   <div class="name_container">
       <?php echo $view["nome"] ?>
   </div>

   <div class="price_container">
       <?php echo "R$ ".$view["valor"] ?>
   </div>

</div>    

<?php

}
}

if (isset($_POST["bts"]) && isset($_POST["all"])){

$view = "SELECT * FROM test";
$resp = $conn -> query($view);

  while($viewp = mysqli_fetch_assoc($resp)){

    $nomeprod = $viewp["nome"];

?>

<div class="test">

   <div class="img_container">
       <img src="<?php echo $viewp["caminhoimg"] ?>" alt="" id="img_container">

       <div class="heart_img">

           <img src="project_imgs/heartIcon.png" alt="" class="heart">

       </div>

       <div class="mark_container">
           <?php echo $viewp["marca"] ?>
       </div>
   </div>

   <div class="name_container">
       <?php echo $viewp["nome"] ?>
   </div>

   <div class="price_container">
       <?php echo "R$ ".$viewp["valor"] ?>
   </div>

   <div class="price_container">
       <?php echo $viewp["estq"] ?>
   </div>

   <form action="" method="post">
        <input type="submit" name="buy" value="Comprar" class="<?php echo $nomeprod ?>" class="cmp">
   </form>

</div>    

<?php

if(isset($_POST["buy"])){
    $w = "UPDATE test SET estq = estq - 1 WHERE nome = "$nomeprod"";
    $a = $conn -> query($w);
}


}
}


if (!isset($_POST["masc"]) && !isset($_POST["fem"]) && !isset($_POST["inf"]) && !isset($_POST["all"]) ){

    $view = "SELECT * FROM test";
    $resp = $conn -> query($view);

   while($view = mysqli_fetch_assoc($resp)){

    $nomeprod = $view["nome"];
    $nomegeral = explode(" ", $nomeprod);
    $estoque = $view["estq"];

?>

<div class="test">

   <div class="img_container">
       <img src="<?php echo $view["caminhoimg"] ?>" alt="" id="img_container">

       <div class="heart_img">

           <img src="project_imgs/heartIcon.png" alt="" class="heart">

       </div>

       <div class="mark_container">
           <?php echo $view["marca"] ?>
       </div>
   </div>

   <div class="name_container">
       <?php echo $view["nome"] ?>
   </div>

   <div class="price_container">
       <?php echo "R$ ".$view["valor"] ?>
   </div>


<?php
    if($estoque<=0){
        

?>
   <div class="price_container">
       <?php echo "Estoque zerado" ?>
   </div>

<?php
}else{

?>
    <div class="price_container">
       <?php echo $view["estq"] ?>
   </div>
<?php
}
?>

   <form action="" method="post" class="cmp">
        <input type="submit" name="buy_<?php echo $nomegeral[0] ?>" value="Comprar">
   </form>

</div>    

<?php

if(isset($_POST["buy_".$nomegeral[0]])){
    $w = "UPDATE test SET estq = estq - 1 WHERE nome = "$nomeprod"";
    $a = $conn -> query($w);

    if ($a){
?>
    <meta http-equiv="refresh" content="0.1">
<?php

    }                   

}
}
}
?>


</div>

</div>
</div>

</body>
</html>';