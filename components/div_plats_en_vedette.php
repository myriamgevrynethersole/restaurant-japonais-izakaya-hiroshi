<!-- DIV PLATS EN VEDETTE -->
<!-- ////////////////////////////////////////////////////////////////// -->

<div class="div--plat--en--veddette--container">

    <div class="baguette">
        <img class="baguette" src="./assets/images/svg/baguettes.svg" alt="">
    </div>
    <div class="div--plat--en--vedette">
        <div class="info--plat--en--vedette">
            <h3><?php echo $plat['nom']; ?></h3>
            <p><?php echo $plat['prix']; ?></p>
        </div>
        <img class="img--plat" src="<?php echo $plat['images'][0]; ?>" alt="Image du plat en vedette">
    </div>


</div>