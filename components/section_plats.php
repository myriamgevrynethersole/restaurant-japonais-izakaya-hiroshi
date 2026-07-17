<!-- SECTION PLATS -->
<!-- ////////////////////////////////////////////////////////////////// -->
<?php $indexCategory = 0?>
<section class="section--plats">
    <?php
    if($filtres){
        foreach ($plats as $categoryName => $category){
            include 'components/div_categories.php';
            $indexCategory += 1;
        }
    }
    else{
        include 'components/div_plats.php';
    }
    ?>
</section>