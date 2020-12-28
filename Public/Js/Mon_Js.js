let ClickForm = document.getElementById('Btn_Form');

function EventBtn(){
    ClickForm.onclick = function(){
        alert('Veuillez remplir tous les champs');
    }
}