<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h1>Calculador de Médias</h1>
    <h3>Insira as notas referente ao Aluno:</h3>

    <form action="" method="post">
        <label for="">1° Nota</label>
        <br>
        <input type="text" name="n1">
        <br><br>
        <label for="">2° Nota</label>
        <br>
        <input type="text" name="n2">
        <br><br>
        <label for="">3° Nota</label>
        <br>
        <input type="text" name="n3">

    <br>
    <br>

    <input type="submit" name="bt">
    </form>
</body>
</html>

<?php

if(isset($_POST['bt'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $soma = $n1 + $n2 + $n3;

    $media = $soma / 3;

    ?>

    <br><br>

    <?php
    echo 'Sua média:';
    echo $media;

    ?>

    <br><br>

    <?php

    if($media <= 5.9){
        echo '<h1>Reprovado</h1>';
    }

    if($media >= 6){
        echo '<h1>Aprovado</h1>';
    }
}
?>