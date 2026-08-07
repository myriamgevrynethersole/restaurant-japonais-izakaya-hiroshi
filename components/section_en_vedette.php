<!-- SECTION EN VEDETTE -->
<!-- ////////////////////////////////////////////////////////////////// -->

<?php $indexCategory = 0?>
<section id="section--en-vedette">
    <h2 class="titre_section">En vedette</h2>

    <div class="contenue-en-vedette div--categorie--plats">

        <!-- Intégration du DIV_PLATS_EN_VEDETTE -->
        <?php
        foreach ($plats_en_vedette as $plat) {
            include 'components/div_plats_en_vedette.php';
        }
        ?>

    </div>
    <div class="fond">
        <img class="image--fond--nouilles" src="./assets/images/svg/nouilles.svg" alt="">
        <img src="./assets/images/svg/bol_devant.svg" alt="" id="bol_devant" class="image_bol">
        <img src="./assets/images/svg/bol_deriere.svg" alt="" id="bol_deriere" class="image_bol">
    </div>
</section>