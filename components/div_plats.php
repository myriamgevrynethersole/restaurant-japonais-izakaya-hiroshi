<div class="div--categorie--plats">
    <div class="swiper swiper--categorie--plats swiper--categorie--plats-<?php echo $indexCategory ?>">
        <div class="swiper-wrapper">
            <?php
            if ($filtres) {
                foreach ($category as $indexFenetre => $plat) {
                    include 'components/div_plat.php';
                }
            } else {
                foreach ($plats as $indexFenetre => $plat) {
                    include 'components/div_plat.php';
                }
            }
            ?>
        </div>
        <div class="slide--command">
            <div class="swiper-pagination"></div>
        </div>

        <div class="swiper-button-next swiper-button-next-<?php echo $indexCategory ?>"></div>
        <div class="swiper-button-prev swiper-button-prev-<?php echo $indexCategory ?>"></div>
    </div>

</div>