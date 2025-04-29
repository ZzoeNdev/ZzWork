<?php

include_once("../config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = '$id'";
$resp = $conn -> query($sql);

while($sql = mysqli_fetch_assoc($resp)){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title><?php echo $sql['nome']; ?></title>
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="container_section">

            <div class="section_masc">
                <p>MASCULINO</p>
            </div>

            <div class="section_fem">
                <p>FEMININO</p>
            </div>

            <div class="section_inf">
                <p>INFANTIL</p>
            </div>

            <div class="section_calc">
                <p>CALÇADOS</p>
            </div>

        </div>
    </header>

    <nav>
        <div class="container_nav">

            <div class="logo_div">
                <a href="../testeprod.php"><img src="img_products/logo.png" alt="" class="logo"></a>
            </div>

            <div class="linel"></div>

            <div class="nav_div">
                <input type="text" class="nav" placeholder="Pesquise o produto aqui...">
                <img src="img_products/search.png" alt="" class="search">
            </div>

            <div class="liner"></div>

            <div class="liked_div">
                <img src="img_products/starIcon.png" alt="" class="liked">
            </div>

            <div class="car_div">
                <img src="img_products/shopIcon.png" alt="" class="car">
            </div>

        </div>
    </nav>

    <main>
        <div class="location">
            <div class="loc1">
                <p>INICIO</p>
            </div>

            <div class="lineloc"></div>

            <div class="loc2">
                <p>PÁGINA INICIAL</p>
            </div>

            <div class="lineloc"></div>

            <div class="locprod">
                <p><?php echo strtoupper($sql['nome']) ?></p>
            </div>
        </div>

        <div class="infoprod">

            <div class="desc_prod">
                <img src="../<?php echo $sql['caminhoimg'] ?>" alt="" class="img1">
                <img src="../<?php echo $sql['caminhoimg'] ?>" alt="" class="img2">
                <img src="../<?php echo $sql['caminhoimg'] ?>" alt="" class="img3">
            </div>
            
            <div class="img_prod">
                <img src="../<?php echo $sql['caminhoimg'] ?>" alt="" class="imgprod">
                <p class="idprod">Id: <?php echo $sql['id'] ?></p>
            </div>

            <div class="info">

                <div class="nameinfo">

                    <div class="nameprod_div">
                        <p class="nameprod"><?php echo strtoupper($sql['nome']) ?></p>
                    </div>

                    <form action="" method="get">
                        <img src="img_products/starIcon.png" alt="" class="liked">
                    </form>

                </div>

                <div class="stars_div">
                    <img src="img_products/stars.png" alt="" class="stars">
                    <a href="#">77 Avaliações</a>
                </div>

                <div class="price_div">
                    <p class="pix">No PIX:</p>
                        <p class="pricepix">R$ <?php echo $sql['valor'] ?></p>
                            <p class="priceboleto">A partir de R$ <?php echo $sql['valor'] ?> em cartão de crédito</p>
                </div>

                <div class="size_div">

                    <p class="size">Tamanhos:</p>

                    <form action="" method="post">
                        <button class="bt_sizes" type="button" id="pp" onclick="clickSizePP()" name="pp">PP</button>
                        <button class="bt_sizes" type="button" id="p" onclick="clickSizeP()" name="p">P</button>
                        <button class="bt_sizes" type="button" id="m" onclick="clickSizeM()" name="g">M</button>
                        <button class="bt_sizes" type="button" id="g" onclick="clickSizeG()" name="gg">G</button>
                        <button class="bt_sizes" type="button" id="gg" onclick="clickSizeGG()" name="gx">GG</button>
                        <button class="bt_sizes" type="button" id="xl" onclick="clickSizeXL()" name="xl">XL</button>

                        <input type="submit" class="shopping" name="bt_shop" value="ADICIONAR AO CARRINHO">
                           
                    </form>

                </div>

            </div>
            
        </div>
    </main>

</body>
</html>

<?php

}

?>
