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
    <div class="g-recaptcha" data-sitekey="6LdW4PwZAAAAAJDdlP9yMWzFftSgQALvW1kkriQq"></div>
    <br/>
    <button type="submit" class="BtnConnecter bg btn-primary" name="Inscription"> Se connecter </button>
</form>