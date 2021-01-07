"use strict";

/*change p to input text + submit*/
(()=>{
    const Elt_table= document.getElementById('formlogs');
    if(Elt_table){
        Elt_table.addEventListener('dblclick', e=>{
            if(e.target.classList.contains('logline')){
                const idLine= e.target.dataset.line;
                const log= e.target.textContent;
                e.target.innerHTML= '<input type="text" name="textLog" class="logModif" value="'+log+'"></input><input type="hidden" name="id" value="'+idLine+'">';
                const ELT_action= e.target.nextElementSibling;
                const links= '<input type="submit" name="cancel" value="cancel"><input type="submit" name="modify" value="modify">';
                ELT_action.innerHTML= links + ELT_action.innerHTML;
            }    
        });
    }
})();