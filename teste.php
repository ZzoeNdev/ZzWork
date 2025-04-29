<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="">Nome:</label>
        <input type="text" name="nome">

        <label for="">Marca:</label>
        <input type="text" name="marca">

        <label for="">Valor:</label>
        <input type="text" name="valor">

        <input type="file" name="img">

        <input type="submit" value="Cadastrar" name="bt">

    </form>
</body>
</html>

<?php
    include_once('config.php');

     if(isset($_POST['bt'])){

        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $valor = $_POST['valor'];
        $img = $_FILES['img'];

        $nomeimg = $img['name'];
        $newimg = uniqid();

        $ext = strtolower(pathinfo($nomeimg, PATHINFO_EXTENSION));

        $archive = 'img_fem/';

        $path = $archive . $newimg . '.' . $ext;

        $enviar = move_uploaded_file($img['tmp_name'], $path);

        $add = "INSERT INTO test (nome, marca, valor, nomeimg, caminhoimg) VALUES ('$nome', '$marca', '$valor', '$nomeimg', '$path')";
        $resp = $conn -> query($add);
     }

     $view = "SELECT * FROM test";
     $resp = $conn -> query($view);

        while($view = mysqli_fetch_assoc($resp)){

?>

<img src="<?php echo $view['caminhoimg'] ?>" alt="">
<label for=""><?php echo $view['nome'] ?></label>
<label for=""><?php echo $view['marca'] ?></label>
<label for=""><?php echo $view['valor'] ?></label>

<?php
     } 
?>