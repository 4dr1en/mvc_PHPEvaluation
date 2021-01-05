"use strict";

/*header*/

let scroll= (function() {
    let oldScroll= 0;
    return function(){
        if(window.scrollY && !oldScroll){
            const EltHeader= document.getElementsByTagName('header')[0];
            const EltLogo= document.getElementById('mainLogo');
            EltHeader.style.transition= "all 300ms ease-in-out";
            EltHeader.classList.add('deployed');
            EltLogo.src='img/header/logo-2.png';

        }
        else if(!window.scrollY){
            const EltHeader= document.getElementsByTagName('header')[0];
            const EltLogo= document.getElementById('mainLogo');
            EltHeader.style.transition= "all 300ms ease-in-out";
            EltHeader.classList.remove('deployed');
            EltLogo.src='img/header/logo.png';
        } 
        oldScroll= window.scrollY;
    };
})();
window.addEventListener("scroll", scroll);