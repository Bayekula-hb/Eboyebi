<form class="FrmLogin" method="post" action="Model/Connexion.php">
    <div class="form-group">
        <label id="login" >Prénom</label>
        <input type="text" class="form-control" id="prenom" name="login"/>
    </div>
    <div class="form-group">
        <label id="pass"> Mot de passe </label>
        <input type="password" id="pass1" class="form-control" name="pass"/> 
    </div>
    <br/>
    <br/>
    <button type="submit" class="BtnConnecter bg btn-primary" name="Inscription"> Se connecter </button>
    <input type="hidden" name="RecaptchaResponse" id="Recaptcha">
</form>
<script src="https://www.google.com/recaptcha/api.js?render=6LfhDCEaAAAAALl_97ZC-d7IrPAaOqOixeyWaWf9"></script>
<script>
    function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfhDCEaAAAAALl_97ZC-d7IrPAaOqOixeyWaWf9', {action: 'submit'}).then(function(token) {
            document.getElementById('Recaptcha').value = token;
        });
    });
    }
</script>