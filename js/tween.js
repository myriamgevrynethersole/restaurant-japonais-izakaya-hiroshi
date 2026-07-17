const ilustrationTitre = document.querySelector('.ilustration--titre--page');
const ilustrationNav = document.querySelector('.image--nav--principal');
const imagePoisson = document.querySelector('.image--poisson');

if(ilustrationTitre){
    window.addEventListener('load', () => {
        gsap.to(ilustrationTitre, {
            keyframes: {
               "0%":{
                    rotation: -10,
                    ease: 'power3.inOut'
                },
                "100%":{
                    rotation: 10,
                    ease: 'power3.inOut'
                },
            },
            yoyo:true,
            repeat: -1,
            duration: 1,
        })
    
    })
}

if(ilustrationNav){
    window.addEventListener('load', () => {
        gsap.to(ilustrationNav, {
            keyframes: {
               "0%":{
                    rotation: -5,
                    ease: 'power3.inOut'
                },
                "100%":{
                    rotation: 5,
                    ease: 'back.in'
                },
            },
            yoyo:true,
            repeat: -1,
            duration: 1,
        })
    
    })
}

if(imagePoisson){
    window.addEventListener('load', () => {
        gsap.to(imagePoisson, {
            keyframes: {
                "100%":{
                    rotation: -360,
                    ease: 'power3.inOut'
                },
            },
            repeat: -1,
            duration: 5,
        })
    
    })
}