// Script pour l'animation gsap
//----------------------------------------------------
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Variables et constantes du projet
// - - - - - - - - - - - - - - - - - - - - - - - - - - -
const divPlatsEnVedetteContainer = document.querySelectorAll(".div--plat--en--veddette--container");
const divChef = document.querySelector("#div_chef");


window.addEventListener('load', () => {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not found — animation skipped');
        return;
    }
    else {
        gsap.registerPlugin(ScrollTrigger);

        divPlatsEnVedetteContainer.forEach((divPlatEnVedette, index) => {
            if (divPlatEnVedette) {
                let divPlatsEnVedetteTimeLine = gsap.timeline({
                    scrollTrigger: {
                        trigger: divPlatEnVedette,
                        start: "top bottom",
                        end: "bottom center",
                        scrub: true,
                        markers: false,
                    }
                });


                if (index % 2 === 0) {
                    divPlatsEnVedetteTimeLine.from(divPlatEnVedette, {
                        x: -1000,
                        duration: 5,
                        ease: "power2.out"
                    });

                } else {
                    divPlatsEnVedetteTimeLine.from(divPlatEnVedette, {
                        x: 1000,
                        duration: 5,
                        ease: "power2.out"
                    });
                }
            }
        });

        if (divChef) {
            let divChefTimeLine = gsap.timeline({
                scrollTrigger: {
                    trigger: divChef,
                    start: "top bottom",
                    end: "bottom center",
                    scrub: true,
                    markers: false,
                }
            });

            divChefTimeLine.from(divChef, {
                opacity: 0,
                duration: 5,
                ease: "power2.out"
            });
        }

        



    }



})