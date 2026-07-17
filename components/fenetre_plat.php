<div class=fenetre--plat>
    <div class="fenetre--plat--haut">
        <div class="btn--icone--container">
            <img class="btn--icone btn--icone--fermer--fenetre" src="./assets/images/svg/icone_sortie.svg" alt="fermer">
        </div>
    </div>
    <div class="fenetre--plat--contenu">
        <?php include 'carrousel_fenetre_plat.php'; ?>

        <div class="info--fenetre--plat">
            <h3><?php echo $plat['nom']; ?> </h3>
            <?php if ($description) { include 'components/p_description.php';};?>
            <p class="prix"><?php echo $plat['prix'] ?></p>
        </div>


    </div>
</div>