<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="" method="post">
        <h3>Cadastro</h3>
        <input type="text" name="nome">
        <input type="submit" name="bt" value="Cadastrar" class="catalogo">
        <br><br>
        <h3>Verificação</h3>
        <input type="text" name="nome2">
        <input type="submit" name="bts" value="Verificar">
    </form>
</body>
</html>

<?php
include_once('config.php');

$rand = random_int(1,99);

if (isset($_POST['bt']) && !empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $resp = "SELECT * FROM teste WHERE nome = '$nome'";
    $resposta = $conn->query($resp);

    if (mysqli_num_rows($resposta) < 1){
    $respi = "INSERT INTO teste (nome) VALUES ('$nome')";
    $respostai = $conn->query($respi);
    echo "<p style = 'color: green';>Adiconado!</p>";
    }else{
        echo "<p style = 'color: red';>Já existente!</p>";
        echo "<p style = 'color: blue';>
        Sugestões:
        $nome($rand)
        </p>";
    }

}

if (isset($_POST['bts']) && !empty($_POST['nome2'])){
    $nome = $_POST['nome2'];
    $respo = "SELECT * FROM teste WHERE nome = '$nome'";
    $respostao = $conn->query($respo);
    
    if(mysqli_num_rows($respostao) < 1)
    {echo "<p style = 'color: red';>Não Existente!</p>";}else{print_r("Existente!");}
}

?>


    