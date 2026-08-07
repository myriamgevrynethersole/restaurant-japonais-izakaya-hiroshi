<?php
$plats = [
    [
        'nom' => "Edamame au sel de mer fumé",
        'description' => "Fèves de soja vapeur, sel fumé et zeste de yuzu",
        'prix' => "10$",
        'images' => "./assets/images/png/entrees/edamame.png",
    ],
    [
        'nom' => "Tataki de thon rouge",
        'description' => "Thon saisi, sauce ponzu, gingembre mariné",
        'prix' => "16$",
        'images' => "./assets/images/png/entrees/tataki.png",
    ],
    [
        'nom' => "Gyoza de porc et crevettes",
        'description' => "Raviolis grillés, sauce miso épicée",
        'prix' => "14$",
        'images' => "./assets/images/png/entrees/gyoza.png"
    ],
    [
        'nom' => "Salade wakame et sésame noir",
        'description' => "Algues marinées, vinaigrette soja-sésame",
        'prix' => "15$",
        'images' => "./assets/images/png/entrees/salade.png"
    ],
    [
        'nom' => "Soupe miso traditionnelle",
        'description' => "Bouillon miso, tofu, algues wakame, oignons verts",
        'prix' => "8$",
        'images' => "./assets/images/png/entrees/soupe.png"
    ],
    [
        'nom' => "Tempura de crevettes",
        'description' => "Pâte croustillante, sauce tentsuyu",
        'prix' => "14$",
        'images' => "./assets/images/png/entrees/tempura.png"
    ],
    [
        'nom' => "Tartare de saumon façon japonaise",
        'description' => "Saumon, huile de sésame, shiso, tobiko",
        'prix' => "18$",
        'images' => "./assets/images/png/entrees/tartare.png"
    ],
    [
        'nom' => "Yakitori de poulet",
        'description' => "Brochettes de poulet laqué, sauce tare maison",
        'prix' => "16$",
        'images' => "./assets/images/png/entrees/yakitori.png"
    ]
    
];
$ilustrationAnimer = "./assets/images/svg/grillades.svg";
$titre = "Entrées";
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
    <div class="interface orange">
        <!-- Intégration du HEADER--PRINCIPAL -->
        <?php include 'components/header_principal.php' ?>

        <main>
            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php include 'components/div_titre_page.php' ?>

            <p class="fils--ariane"><a href="index.php">Accueil</a> / Entrées</p>

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