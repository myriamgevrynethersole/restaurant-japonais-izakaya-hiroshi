// Script pour le swiper
//----------------------------------------------------
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Variables et constantes du projet
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
let thumbSwiper;
let mainSwiper;
let categorieSwiper;
const categoriesPlats = document.querySelectorAll(".div--categorie--plats")
const fenetresPlats = document.querySelectorAll(".fenetre--plat");

// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Initialisation du carrousel Swiper 
// INPUT : le containeur du carrousel
// Description : Paramétrage du carrousel 
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('load', () => {

        categoriesPlats.forEach((categories, indexCategorie) => {

            categorieSwiper = new Swiper(`.swiper--categorie--plats-${indexCategorie}`, {
                spaceBetween: 10,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 1,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                        nextEl: `.swiper-button-next-${indexCategorie}`,
                        prevEl: `.swiper-button-prev-${indexCategorie}`,
                    },
                breakpoints: {
                    400: {
                        slidesPerView: 1.1,


                    },
                    450: {
                        slidesPerView: 1.5,


                    },
                    748: {
                        slidesPerView: 2,


                    },
                    800: {
                        slidesPerView: 2.5,

                    },
                   

                    
                }
            });
            
            fenetresPlats.forEach((fenetre, indexFenetre) => {
                thumbSwiper = new Swiper(`.thumb-swiper-${indexCategorie}-${indexFenetre}`, {
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesProgress: true,
                });
                mainSwiper = new Swiper(`.main-swiper-${indexCategorie}-${indexFenetre}`, {
                    spaceBetween: 10,
                    navigation: {
                        nextEl: `.swiper-button-next-${indexCategorie}-${indexFenetre}`,
                        prevEl: `.swiper-button-prev-${indexCategorie}-${indexFenetre}`,
                    },
                    thumbs: {
                        swiper: thumbSwiper,
                        multipleActiveThumbs: true,
                    },
                });

            });
        });



    });

});





// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Gestion du bouton pause/reprise du carrousel
// INPUT : event click
// Description : Toggle de l'icône du bouton pause/play du carrousel
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// pauseBtn.addEventListener("click", () => {
//     if (isPlaying) {
//         // mécanique de pause du carrouselxx
//         swiper.autoplay.stop();
//         icon.classList.replace("fa-pause", "fa-play"); // Change l'icône en "Lecture"
//     } else {
//         // mécanique de relance du carrousel
//         swiper.autoplay.start();
//         icon.classList.replace("fa-play", "fa-pause"); // Change l'icône en "Pause"
//     }

//     isPlaying = !isPlaying; // Inverse l'état du bouton (toggle)
// });
