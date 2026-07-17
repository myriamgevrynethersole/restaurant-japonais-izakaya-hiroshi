<?php
$plats = [

    [
        'nom' => "Repas 01",
        'description' => "Sélection du chef",
        'prix' => '42$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => "Repas 02",
        'description' => "Gyozas maison aux légumes et sauce ponzu, brochettes robatayaki variées (bœuf wagyu, poulet teriyaki, champignons shiitake), crème glacée au sésame noir et biscuit croquant. Inclus un verre de sake ",
        'prix' => '72$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => "Repas 03",
        'description' => "Sashimi de thon et saumon, sauce yuzu, tataki de bœuf wagyu, légumes grillés et sauce miso, mochis variés (sésame noir, matcha, mangue). Inclus 2 verres de sake ",
        'prix' => '84$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => 'Repas 04',
        'description' => "Le menu 7 services propose une découverte de la cuisine japonaise, avec des sushis et grillades mettant en valeur des saveurs simples et fraîches. L’accord mets et vins est inclus. ",
        'prix' => '250$ / personnes',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => 'Repas 05',
        'description' => "Le menu 7 services propose une découverte de la cuisine japonaise, avec des sushis et grillades mettant en valeur des saveurs simples et fraîches. L’accord mets et vins est inclus. ",
        'prix' => '250$ / personnes',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
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