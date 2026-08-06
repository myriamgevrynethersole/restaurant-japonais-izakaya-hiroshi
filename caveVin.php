<?php
$plats = [
    'saké et shoshu' => [
        [
            'nom' => "Dassai 23 Junmai Daiginjo<br><span>(Japon)</span>",
            'prix' => "140$",
            'images' => "./assets/images/png/cave/sake_et_shoshu/dassai_23_junmai_daiginjo.png"
        ],
        [
            'nom' => "Hakkaisan Tokubetsu Junmai<br><span>(Japon)</span>",
            'prix' => "95$",
            'images' => "./assets/images/png/cave/sake_et_shoshu/hakkaisan_tokubetsu_junmai.png"
        ],
        [
            'nom' => "Born Gold Junmai Daiginjo<br><span>(Japon)</span>",
            'prix' => "125$",
            'images' => "./assets/images/png/cave/sake_et_shoshu/born_gold_junmai_daiginjo.png"
        ],
        [
            'nom' => "Taketsuru Shochu 25 ans<br><span>(Japon)</span>",
            'prix' => "320 $",
            'images' => "./assets/images/png/cave/sake_et_shoshu/taketsuru_shochu_25_ans.png"
        ],
        [
            'nom' => "Iichiko Barley Shochu<br><span>(Japon)</span>",
            'prix' => "85$",
            'images' => "./assets/images/png/cave/sake_et_shoshu/iichiko_barley_shochu.png"
        ]
    ],
    'vin blanc' => [
        [
            'nom' => "Domaine Ostertag, Gewurztraminer Fronholz 2020<br><span>(Alsace)</span>",
            'prix' => "92$",
            'images' => "./assets/images/png/cave/vin_blanc/domaine_ostertag_gewurztraminer_fronholz_2020.png"
        ],
        [
            'nom' => "Château Ste. Michelle, Eroica Riesling 2021<br><span>(États-Unis)</span>",
            'prix' => "78$",
            'images' => "./assets/images/png/cave/vin_blanc/chateau_ste_michelle_eroica_riesling_2021.png"
        ],
        [
            'nom' => "Domaine des Terres Dorées, Beaujolais Blanc 2020<br><span>(France)</span>",
            'prix' => "66$",
            'images' => "./assets/images/png/cave/vin_blanc/domaine_des_terres_dorees_beaujolais_blanc_2020.png"
        ],
        [
            'nom' => "Pazo Señorans, Albariño 2021<br><span>(Espagne)</span>",
            'prix' => "70$",
            'images' => "./assets/images/png/cave/vin_blanc/pazo_senorans_albarino_2021.png"
        ],
        [
            'nom' => "Weingut Knoll, Grüner Veltliner Smaragd 2021<br><span>(Autriche)</span>",
            'prix' => "88$",
            'images' => "./assets/images/png/cave/vin_blanc/weingut_knoll_gruner_veltliner_smaragd_2021.png"
        ]
    ],
    'vin rouge' => [
        [
            'nom' => "Domaine Jean Foillard, Morgon Côte du Py 2021<br><span>(France)</span>",
            'prix' => "85$",
            'images' => "./assets/images/png/cave/vin_rouge/domaine_jean_foillard_morgon_cote_du_py_2021.png"
        ],
        [
            'nom' => "Château Musar, Gaston Hochar 2016<br><span>(Liban)</span>",
            'prix' => "110$",
            'images' => "./assets/images/png/cave/vin_rouge/chateau_musar_gaston_hochar_2016.png"
        ],
        [
            'nom' => "Radikon, Slatnik 2019<br><span>(Italie)</span>",
            'prix' => "140$",
            'images' => "./assets/images/png/cave/vin_rouge/radikon_slatnik_2019.png"
        ],
        [
            'nom' => "Yohan Lardy, Moulin-à-Vent 2021<br><span>(Beaujolais)</span>",
            'prix' => "70$",
            'images' => "./assets/images/png/cave/vin_rouge/yohan_lardy_moulin_a_vent_2021.png"
        ],
        [
            'nom' =>"Domaine de la Tournelle, Uva Arbosiana<br><span>(France)</span>",
            'prix' => "92$",
            'images' => "./assets/images/png/cave/vin_rouge/domaine_de_la_tournelle_uva_arbosiana.png"
        ]
    ],
    'bières japonaise et sake pétillant' => [
        [
            'nom' => "Hitachino Nest White Ale<br><span>(Japon)</span>",
            'prix' => "18$",
            'images' => "./assets/images/png/cave/bieres_japonaises_et_sake_petillant/hitachino_nest_white_ale.png"
        ],
        [
            'nom' => "Sapporo Premium Reserve<br><span>(Japon)</span>",
            'prix' => "14$",
            'images' => "./assets/images/png/cave/bieres_japonaises_et_sake_petillant/sapporo_premium_reserve.png"
        ],
        [
            'nom' => "Kikusui Funaguchi Nama Genshu<br><span>(Saké pétillant, Japon)</span>",
            'prix' => "55$",
            'images' => "./assets/images/png/cave/bieres_japonaises_et_sake_petillant/kikusui_funaguchi_nama_genshu.png"
        ],
        [
            'nom' => "Asahi Super Dry Black<br><span>(Japon)</span>",
            'prix' => "16$",
            'images' => "./assets/images/png/cave/bieres_japonaises_et_sake_petillant/asahi_super_dry_black.png"
        ],
        [
            'nom' => "Gekkeikan Sparkling Saké Zipang<br><span>(Japon)</span>",
            'prix' => "45$",
            'images' => "./assets/images/png/cave/bieres_japonaises_et_sake_petillant/gekkeikan_sparkling_sake_zipang.png"
        ]
    ]
];
$ilustrationAnimer = "./assets/images/svg/vin_rouge.svg";
$titre = "Cave à Vin";
$filtres = true;
$description = false;
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
    <div class="interface jaune">
        <!-- Intégration du HEADER--PRINCIPAL -->
        <?php include 'components/header_principal.php' ?>

        <main>
            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php include 'components/div_titre_page.php' ?>

            <p class="fils--ariane"><a href="index.php">Accueil</a> / Cave à vin</p>

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