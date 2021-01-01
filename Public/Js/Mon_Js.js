let ClickForm = document.getElementById('Btn_Form');
let ClickNewsletters = document.getElementsByName('Newsletters');
let FormNewsletters = document.getElementsById('NewlettersElemets');

function EventBtn(){
    ClickForm.onclick = function(){
        alert('Veuillez remplir tous les champs');
    }
}
ClickForm.addEventListener('click', function(){ alert('Veuillez saisir tout les champs');
    }, false);
ClickForm.addEventListener('click', function(){ alert('Tous ces champs sont obligatoires');
    }, false);

function InitialiseNewsletters(){
    ClickNewsletters.onclick = function(){
        this.onreset();       
    }
}