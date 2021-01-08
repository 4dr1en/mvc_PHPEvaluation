"use strict";

/*change p to input text + submit*/
(()=>{
    const Elt_table= document.getElementById('formlogs');
    if(Elt_table){
        let curModif= false;

        Elt_table.addEventListener('dblclick', e=>{
            if(e.target.classList.contains('logline') && !curModif){
                curModif= true;
                const idLine= e.target.dataset.line;
                const log= e.target.textContent;
                e.target.innerHTML= '<input type="text" name="textLog" class="logModif" value="'+log+'"></input><input type="hidden" name="id" value="'+idLine+'">';
                const ELT_action= e.target.nextElementSibling;
                const links= '<input type="submit" name="cancel" class="btGreen cancel" data-line="'+idLine+'" value="Cancel"><input type="submit" name="modify" class="btRed" value="Modify">';
                ELT_action.innerHTML= links + ELT_action.innerHTML;
            }    
        });
        
        Elt_table.addEventListener('click', e=>{
            if(e.target.classList.contains('cancel')){
                curModif= false;
                e.preventDefault();
                const idLine= e.target.dataset.line;

                const Elt_inputLog= document.querySelector('.logline[data-line="'+idLine+'"] input[type="text"]');
                console.log('.logline[data-line="'+idLine+'"] input[type="text"]');
                console.log(Elt_inputLog);
                const log= Elt_inputLog.value;
                /*let log= Elt_inputLog.dataset.log;
                log= log.replace('_', ' ');*/
                Elt_inputLog.parentNode.innerHTML= log;

                e.target.nextSibling.remove(); 
                e.target.remove(); 
            }    
        });

    }
})();