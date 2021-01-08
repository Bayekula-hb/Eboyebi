let prenomInput = document.getElementById('prenom');
let DivAfterInput = document.createElement('label');
let TextLabelAfterInput = document.createTextNode('Veuillez saisir votre login qui est le prenom que vous avez saisir lors de l\'inscription');
DivAfterInput.appendChild(TextLabelAfterInput);
//La function qui fait l'action lors du click
prenomInput.addEventListener('click', function(){
    prenomInput.after(DivAfterInput);
    prenomInput.style.borderColor = "rgb(230, 110, 200)";
});
//Function qui permet de voir la saisise progressive
prenomInput.addEventListener('input', function(e){
    DivAfterInput.innerText = e.target.value;
});

let passInput = document.getElementById('pass1');
let LabAfterPass = document.createElement('label');
let TextLabelAfterPass = document.createTextNode('Veuillez saisir votre mot de passe correct');
LabAfterPass.appendChild(TextLabelAfterPass);
//Function lo
passInput.addEventListener('click', function(){
    passInput.after(LabAfterPass);
    passInput.style.borderColor = "rgb(230, 110, 200)";
});