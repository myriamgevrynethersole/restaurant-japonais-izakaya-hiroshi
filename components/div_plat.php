<div class="swiper-slide">
    <div class="div--plat">
        <img src="<?php echo $plat['images'] ?>" alt="" class="image--plat">
        <div class="info--plat">
            <h3><?php echo $plat['nom'] ?></h3>
            <?php if($description){echo "<p class='description'>$plat[description]</p>";}?>
            <p class="prix"><?php echo $plat['prix'] ?></p>
            
            
        </div>
    </div>
</div>