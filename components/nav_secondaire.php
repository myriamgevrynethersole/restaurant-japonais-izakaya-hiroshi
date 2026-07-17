<!-- NAV_SECONDAIRE -->
<!-- /////////////////////////////////////////////////////////////////// -->
 <section>
     <nav class="nav--secondaire">
         <?php $num = 0?>
         <?php foreach ($plats as $categoryName => $category) {
             echo "<a class='button--nav--secondaire' onclick='selectioneButton($num)'>$categoryName</a>";
             $num += 1;
         }
         ?>
     </nav>
 </section>