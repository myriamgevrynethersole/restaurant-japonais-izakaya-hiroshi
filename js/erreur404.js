document.addEventListener('DOMContentLoaded', () => {

    let count = 5;
    const countdownElement = document.querySelector("#cpt");
    const countdown = setInterval(() => {
        countdownElement.textContent = count;
        if(count === 0){
            clearInterval(countdown);
            window.location.href = "index.php"
        }
        count--
    },1000 )
});