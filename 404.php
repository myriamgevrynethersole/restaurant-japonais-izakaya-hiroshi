<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/images/svg/favicon.svg">
    <title>Page 404</title>
</head>

<body>
    <div class="interface bleu--gris">
        <main>
            <div id=div--404>
                <h1>Erreur 404</h1>
                <div class="contenue--404">
                    <div class="div--image--poisson">
                        <img class="image--poisson" src="./assets/images/svg/poisson.svg" alt="">
                    </div>
                    <div class="text--erreur">
                        <p>Oups... <br> Cette page n'est pas encore cuite.</p>
                        <div class="compteur">
                            <span id="cpt">5</span> <span>secondes</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id=fond--404> 
                   <img class = "image--fond" id = "image--nenuphar--01" src="./assets/images/svg/nenuphar.svg" alt="">
                   <img class = "image--fond" id = "image--nenuphar--02" src="./assets/images/svg/nenuphar.svg" alt="">
                   <img class = "image--fond" id = "image--nenuphar--03" src="./assets/images/svg/nenuphar.svg" alt="">
            </div>
        </main>

    </div>

    <script src="node_modules/gsap/dist/gsap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/tween.js"></script>
    <script src="js/erreur404.js"></script>
</body>

</html>