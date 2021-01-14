<div class="FormContact">
    <p class="TextContact"> Des questions? Des Conseils? Des Propositions? Priere de nous contacter </p>
    <form class="ContactForm" method="post" action="">
        <input class="form-control" name="Nom" placeholder="Mon nom ex: Nazareth">
        <input class="form-control" name="Prenom" placeholder="Mon prenom ex: Jesus">
        <input class="form-control" name="Mail" type="mail" placeholder="MonEmail@email.com">
        <input class="form-control" name="Message" type="text" placeholder="Sujet"> 
        <textarea name="Message" placeholder="Mon Message, Salut c'est Nazareth ...">
        </textarea>
        <br/>
        <button class="bg btn-primary" name="inscription"> Envoyer </button>
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
</div>