<?php
$plats_en_vedette = [
    [
        'nom' => "Table d'hôte option 1",
        'description' => "Salade d’algues wakamé et sésame, sushi assortis (10 morceaux, choix du chef), Dorayaki au matcha et crème de haricots rouges, thé vert inclus ",
        'prix' => '65$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => "Table d'hôte option 2",
        'description' => "Gyozas maison aux légumes et sauce ponzu, brochettes robatayaki variées (bœuf wagyu, poulet teriyaki, champignons shiitake), crème glacée au sésame noir et biscuit croquant. Inclus un verre de sake ",
        'prix' => '72$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => "Table d'hôte option 3",
        'description' => "Sashimi de thon et saumon, sauce yuzu, tataki de bœuf wagyu, légumes grillés et sauce miso, mochis variés (sésame noir, matcha, mangue). Inclus 2 verres de sake ",
        'prix' => '84$',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ],
    [
        'nom' => 'Menu 7 services ',
        'description' => "Le menu 7 services propose une découverte de la cuisine japonaise, avec des sushis et grillades mettant en valeur des saveurs simples et fraîches. L’accord mets et vins est inclus. ",
        'prix' => '250$ / personnes',
        'images' => ['./assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg', './assets/images/svg/placeholder.svg']
    ]
];
$ilustrationAnimer = "./assets/images/svg/repas03.svg";
$titre = "Izakaya Hiroshi";
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
    <title>Accueil</title>
</head>

<body>
    <div class="interface bleu--gris">

        <!-- Intégration du HEADER--PRINCIPAL -->
        <?php include 'components/header_principal_index.php' ?>


        <main>
            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php include 'components/section_ouverture_restaurant.php' ?>
           

            <p class="fils--ariane">Accueil</p>

           

            <!-- Intégration du SECTION_EN_VEDETTE -->
            <?php include 'components/section_en_vedette.php' ?>

            <!-- Intégration du SECTION_CHEF -->
            <?php include 'components/section_chef.php' ?>

            <!-- Intégration du SECTION_CHEF -->
            <?php include 'components/section_reservation.php' ?>

        </main>

        <!-- Intégration du FOOTER -->
        <?php include 'components/footer.php' ?>




    </div>
    <!-- Importation des librairies puis du script principal -->
    <script src="node_modules/gsap/dist/gsap.min.js"></script>
    <script src="node_modules/gsap/dist/ScrollTrigger.min.js"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/scrolltrigger.js"></script>
    <script src="js/tween.js"></script>
</body>

</html>