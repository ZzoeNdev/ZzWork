<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AddProd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="cadasprod.css">
    <title>Document</title>
</head>
<body>

    <header>
        <img src="products/img_products/logo.png" alt="" class="logo">
    </header>

<div class="container_geral">

    <img src="boxes.png" alt="" class="boxes"> 

    <div class="container_add">

    <form action="" method="post" enctype="multipart/form-data" class="form_add">

    <div class="text">

            <h1 class="cadastre">CADASTRE</h1>
            <h3 class="produtos">PRODUTOS</h3>

    </div>

        <label for="">Nome:</label>
        <br>
        <input type="text" name="nomep" class="in_name">
        <br><br>
        <label for="">Descrição:</label>
        <br>
        <input type="text" name="descp" class="in_desc">
        <br><br>
        <label for="">Marca:</label>
        <br>

        <select name="marcap" class="in_mark">
            <option value="">Selecione uma marca...</option>
            <option value="">Nike</option>
            <option value="">Adidas</option>
            <option value="">Renner</option>
            <option value="">Outra...</option>
        </select>

        <br><br>
        <label for="">Valor:</label>
        <br>
        <input type="text" name="valorp" class="in_value">
        <br>
        <label for="">Estoque:</label>
        <br>
        <input type="text" name="estq" class="in_estq">
        <br><br>
        <label for="">Imagem do produto:</label>
        <br>
        <input type="file" name="imgp" class="in_img">
        <br>
        <label for="">Categoria:</label>
        <input type="checkbox" name="masc" id=""> Masculino
        <input type="checkbox" name="fem" id=""> Feminino
        <input type="checkbox" name="inf" id=""> Infantil
        <br><br><br>
        <input type="submit" name="bt">
    </form>

</div>

<div class="add_imgs">
    <input type="file">
    <input type="file">
    <input type="file">
    <input type="file">
</div>

</div>

</body>
</html>

<?php
    include_once('config.php');
    include_once('products/base_prod/prodgeral.php');

    $id = uniqid();

     if(isset($_POST['bt']) && isset($_POST['fem'])){

        $nome = $_POST['nomep'];
        $marca = $_POST['marcap'];
        $valor = $_POST['valorp'];
        $estq = $_POST['estq'];
        $img = $_FILES['imgp'];

        $nomeimg = $img['name'];
        $newimg = uniqid();

        $ext = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

        $archive = 'img_fem/';

        $path = $archive . $newimg . '.' . $ext;

        $enviar = move_uploaded_file($img['tmp_name'], $path);

        $add = "INSERT INTO products (nome, genero, marca, valor, estq, nomeimg, caminhoimg) VALUES ('$nome', 'fem', '$marca', '$valor', '$estq', '$newimg', '$path')";
        $resp = $conn -> query($add);
     }

     if(isset($_POST['bt']) && isset($_POST['masc'])){

        $nome = $_POST['nomep'];
        $marca = $_POST['marcap'];
        $valor = $_POST['valorp'];
        $estq = $_POST['estq'];
        $img = $_FILES['imgp'];

        $nomeimg = $img['name'];
        $newimg = uniqid();

        $ext = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

        $archive = 'img_masc/';

        $path = $archive . $newimg . '.' . $ext;

        $enviar = move_uploaded_file($img['tmp_name'], $path);

        $add = "INSERT INTO products (id, nome, genero, marca, valor, estq, nomeimg, caminhoimg) VALUES ('$id', '$nome', 'masc', '$marca', '$valor', '$estq', '$newimg', '$path')";
        $resp = $conn -> query($add);

        $caminho = 'products/';
        $nomearq = $nome.'.php';
        $caminhogeral = $caminho . $nomearq;

        file_put_contents($caminhogeral, $codigo_produto);
     }

     if(isset($_POST['bt']) && isset($_POST['inf'])){

        $nome = $_POST['nomep'];
        $marca = $_POST['marcap'];
        $valor = $_POST['valorp'];
        $estq = $_POST['estq'];
        $img = $_FILES['imgp'];

        $nomeimg = $img['name'];
        $newimg = uniqid();

        $ext = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

        $archive = 'img_inf/';

        $path = $archive . $newimg . '.' . $ext;

        $enviar = move_uploaded_file($img['tmp_name'], $path);


     }

?>
