"use strict";

/*header*/
(()=>{
    let scroll= (function() {
        let oldScroll= 0;
        return function(){
            if(window.scrollY && !oldScroll){
                const EltHeader= document.getElementsByTagName('header')[0];
                EltHeader.style.transition= "all 300ms ease-in-out";
                EltHeader.classList.add('deployed');
            }
            else if(!window.scrollY){
                const EltHeader= document.getElementsByTagName('header')[0];
                EltHeader.style.transition= "all 300ms ease-in-out";
                EltHeader.classList.remove('deployed');
            } 
            oldScroll= window.scrollY;
        };
    })();
    window.addEventListener("scroll", scroll);
})();


/*display form login*/
(()=>{
    const Elt_btnLogin= document.getElementById("btnLogin");
    
    if(Elt_btnLogin){
        Elt_btnLogin.addEventListener('click',e=>{
            e.preventDefault();
            const Elt_formLogin= document.getElementById('formLogin');
            console.log(Elt_formLogin);
            Elt_formLogin.classList.toggle('loginFormOpen');
        })
    }
})();

//document.getElementById