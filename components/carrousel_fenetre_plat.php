<div class="carrousel--fenetre--plat">
    <!-- Conteneur des diapositives du carrousel -->
    <div class="swiper main-swiper main-swiper-<?php echo $indexCategory ?>-<?php echo $indexFenetre ?>">
        <div class="swiper-wrapper">
            <!-- Intégration du DIV_TITRE_PAGE -->
            <?php
            foreach ($plat['images'] as $index => $image) {

                include 'carrousel_diapositive_fenetre_plat.php';
            }
            ?>
        </div>
    </div>

    <div class="swiper-button-next swiper-button-next-<?php echo $indexCategory ?>-<?php echo $indexFenetre ?>"></div>
    <div class="swiper-button-prev swiper-button-prev-<?php echo $indexCategory ?>-<?php echo $indexFenetre ?>"></div>

    <div thumbsSlider="" class="swiper thumb-swiper thumb-swiper-<?php echo $indexCategory ?>-<?php echo $indexFenetre ?>">
        <div class="swiper-wrapper">
            <?php
            foreach ($plat['images'] as $index => $image) {
                $index += 1;
                include 'carrousel_diapositive_fenetre_plat.php';
            }
            ?>
        </div>
    </div>
</div>