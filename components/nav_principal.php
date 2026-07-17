 <nav id="nav--primary">
     <div class="nav--primary--top">
         <a href="index.php" class="lien--logo"><img src="./assets/images/svg/logo_mobile.svg" alt="logo" class="logo-header--mobile"><img src="./assets/images/svg/logo_desktop.svg" alt="logo" class="logo-header"></a>
         <div class="btn--icone--container">
             <img src="./assets/images/svg/icone_sortie.svg" alt="close" id="btn--close--menu" onclick="closeNavPrincipal()" class="btn--icone">
         </div>
     </div>

     <ul class="nav--liste--principal">
         <li class="nav--element"> <a href="platPrincipaux.php" onclick = "redirection(event)">Plats principaux</a></li>
         <li class="nav--element"> <a href="entrees.php" onclick = "redirection(event)">Entrées</a> </li>
         <li class="nav--element"> <a href="caveVin.php" onclick = "redirection(event)">Cave à vin </a></li>
         <li class="nav--element"> <a href="dessert.php" onclick = "redirection(event)">Desserts</a> </li>
     </ul>

        <a class="lien-reserver" href="index.php#section--reservation" onclick = "redirection(event)">Réserver</a>

     <div class="div--image--nav--principal">
         <img class="image--nav--principal" src="./assets/images/svg/image_nav.svg" alt="">
     </div>



 </nav>