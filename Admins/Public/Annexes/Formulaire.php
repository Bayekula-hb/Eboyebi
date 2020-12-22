<form class="FrmInscri" method="post" action="Model/Inscription.php">
    <div class="form-group">
        <label id="prenom" > Prénom </label>
        <input type="text" class="form-control" id="prenom" name="prenom"/>
    </div>
    <div class="form-group">
        <label id="nom"> Nom </label>
        <input type="text" class="form-control" id="nom" name="nom"/>
    </div>
    <div class="form-group">
        <label id="email"> Email </label>
        <input type="mail" id="email" class="form-control" name="mail"/> 
    </div>
    <div class="form-group">
        <label id="pass1"> Mot de passe </label>
        <input type="password" id="pass1" class="form-control" name="pass1"/> 
    </div>
    <div class="form-group">
        <label id="pass2"> Confirmer le mot de passe </label>
        <input type="password" id="pass2" class="form-control" name="pass2"/> 
    </div>
    <br/>
    <div class="g-recaptcha" data-sitekey="6LdW4PwZAAAAAJDdlP9yMWzFftSgQALvW1kkriQq"></div>
    <br/>
    <button type="submit" class="bg btn-primary" name="Inscription"> S'inscrire </button>
</form>