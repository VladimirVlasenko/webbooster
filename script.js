document.addEventListener("DOMContentLoaded", ()=>{

    let cards = document.querySelectorAll(".card");
    let form = document.querySelector(".form");
    let formWrapper = document.querySelector(".form_wrapper");
    let position = document.querySelector(".position")
    
    formWrapper.addEventListener('click', (event)=>{
        if(!event.target.closest(".form")) {
            formWrapper.classList.remove('active');
        }
    })

    form.addEventListener('submit', (event)=>{
        formWrapper.classList.remove('active');

    })
    

    for(let i=0; i<cards.length; i++) {
        cards[i].addEventListener('click', (event)=>{
            formWrapper.classList.add('active');
        })
    }

})