<?php
$plats = [

    [
        'nom' => "Mochis glacés assortis",
        'description' => "Matcha, mangue, sésame noir",
        'prix' => "12$",
        'images' => "./assets/images/png/desserts/mochis_glaces_assortis.png"
    ],
    [
        'nom' => "Dorayaki au haricot rouge",
        'description' => "Pancakes japonais, pâte de haricot azuki",
        'prix' => "10$",
        'images' => "./assets/images/png/desserts/dorayaki_au haricot_rouge.png"
    ],
    [
        'nom' => "Cheesecake au yuzu",
        'description' => "Crémeux et acidulé, coulis de fruits rouges",
        'prix' => "12$",
        'images' => "./assets/images/png/desserts/cheesecake_au_yuzu.png"
    ],
    [
        'nom' => "Gâteau au matcha et chocolat blanc",
        'description' => "Fondant, sauce caramel miso",
        'prix' => "12$",
        'images' => "./assets/images/png/desserts/gateau_au_matcha_et_chocolat_blanc.png"
    ],
    [
        'nom' => "Glace artisanale au sésame noir",
        'description' => "Crémeuse et légèrement sucrée",
        'prix' => "10$",
        'images' => "./assets/images/png/desserts/glace_artisanale_au_sesame_noir.png"
    ],
    [
        'nom' => "Taiyaki fourré à la crème pâtissière",
        'description' => "Gaufre japonaise en forme de poisson",
        'prix' => "10$",
        'images' => "./assets/images/png/desserts/taiyaki_fourre_a_la_creme_patissiere.png"
    ]


];
$ilustrationAnimer = "./assets/images/svg/crepe_poisson.svg";
$titre = "Dessert";
$filtres = false;
$description = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/images/svg/favicon.svg">
    <title><?php echo $titre?></title>
</head>

<body>
    <div class="interface bleu">
        <!-- Intégration du HEADER--PRINCIPAL -->
        <?php include 'components/header_principal.php' ?>

        <main>
            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php include 'components/div_titre_page.php' ?>

            <p class="fils--ariane"><a href="index.php">Accueil</a> / Desserts</p>

            <!-- Intégration du NAVSECONDAIRE -->
            <?php include 'components/section_plats.php' ?>

        </main>

        <!-- Intégration du FOOTER -->
        <?php include 'components/footer.php' ?>


    </div>
    <!-- Importation du script -->
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="node_modules/gsap/dist/gsap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/tween.js"></script>
</body>

</html>