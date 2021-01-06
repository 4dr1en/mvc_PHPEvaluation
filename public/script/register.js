"use strict";

(()=>{
    const Elt_closeErrors= document.getElementById('closeErrors');
    if(Elt_closeErrors){
        Elt_closeErrors.addEventListener('click',()=>{
            const Elt_listeErrors= document.getElementById('errorsForm');
            Elt_listeErrors.style.display= 'none';
        });
    }
   
})();