<?php
$plats = [
    'sushi et sashamis' => [
        [
            'nom' => "Assortiment de makis et nigiris <span>(12 morceaux)</span>, soupe miso et salade de wakame",
            'description' => "Sélection du chef",
            'prix' => "42$",
            'images' => "./assets/images/png/plats/sushis_et_sashimis/makis_nigiris.png"
        ],
        [
            'nom' => "Assortiment de sashimis <span>(10 morceaux)</span>, soupe miso et salade de wakame",
            'description' => "Sélection du chef",
            'prix' => "48$",
            'images' => "./assets/images/png/plats/sushis_et_sashimis/sashimis.png"
        ],
        [
            'nom' => "Assortiment de makis et hosomakis et nigiris <span>(12 morceaux)</span>, soupe miso et salade de wakame",
            'description' => "Sélection du chef",
            'prix' => "34$",
            'images' => "./assets/images/png/plats/sushis_et_sashimis/makis_hosomakis_nigiris.png"
        ],
        [
            'nom' => "Chirashi sushi",
            'description' => "Bol de riz vinaigré garni de sashimis et légumes marinés",
            'prix' => "35$",
            'images' => "./assets/images/png/plats/sushis_et_sashimis/chirashi_sushi.png"
        ],
        [
            'nom' => 'Plateau Omakase <span>(pour 2 personnes)</span>, soupe miso et salade de wakame',
            'description' => "Sélection exclusive du chef",
            'prix' => "88$",
            'images' => "./assets/images/png/plats/sushis_et_sashimis/plateau_omakase.png"
        ]
    ],
    'grillades' => [
        [
            'nom' => "Saumon teriyaki",
            'description' => "Filet de saumon laqué, légumes sautés au shoyu, riz vapeur",
            'prix' => "32$",
            'images' => "./assets/images/png/plats/grillades/saumon_teriyaki.png"
        ],
        [
            'nom' => "Bœuf wagyu grillé",
            'description' => "Wagyu A5, sauce yakiniku, légumes au sésame",
            'prix' => "48$",
            'images' => "./assets/images/png/plats/grillades/boeuf_wagyu_grille.png"
        ],
        [
            'nom' => "Poulet karaage",
            'description' => "Morceaux de poulet frit, mayonnaise au yuzu",
            'prix' => "38$",
            'images' => "./assets/images/png/plats/grillades/poulet_karaage.png"
        ],
        [
            'nom' => "Ramen miso maison",
            'description' => "Bouillon miso, porc chashu, œuf mariné, nouilles fraîches",
            'prix' => "44$",
            'images' => "./assets/images/png/plats/grillades/ramen_miso_maison.png"
        ],
        [
            'nom' => "Assortiment de brochette yakitori <span>(10 morceaux)</span>",
            'description' => "Brochettes de poulet, bœuf et crevettes, accompagnées de riz et d’une Sapporo.",
            'prix' => "40$",
            'images' => "./assets/images/png/plats/grillades/assortiment_de_brochette_yakitori_10_morceaux.png"
        ],
    ],
    'végétarien' => [
        [
            'nom' => "Ramen aux champignons shiitake",
            'description' => "Bouillon miso, tofu grillé, légumes croquants, nouilles udon",
            'prix' => "28$",
            'images' => "./assets/images/png/plats/vegetarien/ramen_aux_champignons_shiitake.png"
            ],
        [
            'nom' => "Donburi au tofu caramélisé",
            'description' => "Riz japonais, tofu mariné au soja, légumes sautés, graines de sésame",
            'prix' => "32$",
            'images' => "./assets/images/png/plats/vegetarien/donburi_au_tofu_caramelise.png"
        ],
        [
            'nom' => "Sushis végétariens <span>(10 morceaux)</span>",
            'description' => "Avocat, concombre, champignon, mangue, radis mariné",
            'prix' => "30$",
            'images' => "./assets/images/png/plats/vegetarien/sushis_vegetariens_10_morceaux.png"
        ],
        [
            'nom' => "Tempura de légumes croquants",
            'description' => "Pâte croustillante, légumes racines, sauce tentsuyu",
            'prix' => '24$',
            'images' => "./assets/images/png/plats/vegetarien/tempura_de_legumes_croquants.png"
        ],
        [
            'nom' => "Gyoza aux légumes",
            'description' => "Raviolis grillés, sauce ponzu et gingembre",
            'prix' => '32$',
            'images' => "./assets/images/png/plats/vegetarien/gyoza_aux_legumes.png"
        ]

    ]
];
$ilustrationAnimer = "./assets/images/svg/repas02.svg";
$titre = "Plats Principaux";
$filtres = true;
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
    <title><?php echo $titre ?></title>
</head>

<body>
    <div class="interface rouge">
        <!-- Intégration du HEADER--PRINCIPAL -->
        <?php include 'components/header_principal.php' ?>

        <main>

            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php include 'components/div_titre_page.php' ?>

            <p class="fils--ariane"><a href="index.php">Accueil</a> / Plats Principaux</p>

            <!-- Intégration du NAVSECONDAIRE -->
            <?php include 'components/nav_secondaire.php' ?>

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