// Script pour l'ouverture et la fermeture des éléments
//----------------------------------------------------
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Variables et constantes du projet
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
const panneauNavigation = document.querySelector('#nav--primary');
const liensNav = document.querySelectorAll('#nav--primary li');

const divPlats = document.querySelectorAll(".div--plat ");
const fenetrePlats = document.querySelectorAll(".fenetre--plat");
const iconeFermer = document.querySelectorAll(".btn--icone--fermer--fenetre");

const divPlatsVedette = document.querySelectorAll(".div--plat--en--vedette--container");
const infoPlatsVedette = document.querySelectorAll(".info--plat--en--vedette");

const buttonsNavSecondaire = document.querySelectorAll(".button--nav--secondaire");
const divCategories = document.querySelectorAll(".categorie");
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Ouverture du panneau de navigation
// Description : Gestion de l'ouverture du panneau et dévoilement des options
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
function openNavPrincipal() {
    panneauNavigation.style.width = "100%";

    setTimeout(() => {
        for (const lien of liensNav) {
            lien.style.opacity = 1;
            lien.classList.remove('fadeMenu');
        }
    }, 800);
}



// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Fermeture du panneau de navigation
// Description : Gestion de la fermeture du panneau et masquage des options
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
function closeNavPrincipal() {
    for (const lien of liensNav) {
        lien.style.opacity = 0;
        lien.classList.add('fadeMenu');
    }

    setTimeout(() => {
        panneauNavigation.style.width = "0%";
    }, 600);
};


// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Redirection vers une autre page
// Description : Gestion du retardement de la redirection vers une autre page
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
function redirection(event) {
    event.preventDefault();
    const url = event.target.getAttribute('href');
    closeNavPrincipal();

    setTimeout(() => {
        window.location.href = url;
    }, 980);
};



function selectioneButton(num) {
    if(buttonsNavSecondaire[num].classList.contains("button--nav--secondaire--selectionner")){
        buttonsNavSecondaire.forEach((buttonNavSecondaire, index) => {
        buttonNavSecondaire.classList.remove("button--nav--secondaire--selectionner");
        divCategories[index].style.display = "block";
    });
    }
    else{
        buttonsNavSecondaire.forEach((buttonNavSecondaire, index) => {
            buttonNavSecondaire.classList.remove("button--nav--secondaire--selectionner");
            divCategories[index].style.display = "none";
        });
        buttonsNavSecondaire[num].classList.add("button--nav--secondaire--selectionner");
        divCategories[num].style.display = "block";
    }
};

// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Ouverture et la fermeture des infos p lats
// Description : Gestion de l'ouverture du panneau et dévoilement des informations
// - - - - - - - - - - - - - - - - - - - - - - - - - - -

divPlatsVedette.forEach((platVedette, index) => {

    platVedette.addEventListener("mouseover", () => {
        infoPlatsVedette[index].style.opacity = "1";
    });

    platVedette.addEventListener("mouseout", () => {
        infoPlatsVedette[index].style.opacity = "0";

    });


});