<main class="main">
    <div class="headerBottom">  
        <div class="headerBanner">
        </div>
    </div>
        <form method="POST" action="?controller=compte&action=compte_inscription_register" class="formInscription">
            <fieldset class="fieldInscription">
                <legend>Inscription</legend>
                <div class="formulaire">  
                    <div class="formFlex">        
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="Nom" placeholder="Votre nom" required>
                    </div>
                    <div class="formFlex">
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" id="Prenom" placeholder="Votre prénom" required>
                    </div>
                    <div class="formFlex">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" name="pseudo" id="Pseudo" placeholder="Votre pseudo" required>
                    </div>
                    <div class="formFlex">
                        <label for="mail">Mail :</label>
                        <input type="mail" name="mail" id="Mail" placeholder="Votre adresse mail" required>
                    </div>
                    <div class="formFlex">
                        <label for="mdp2">Mot de passe :</label>
                        <input type="password" name="mdp" id="mdp" placeholder="Choisissez un mot de passe" required>
                    </div>
                    <div class="formFlex">
                        <label for="mdp2">Confirmation mot de passe :</label>
                        <input type="password" name="mdp2" id="mdp2" placeholder="Confirmer le mot de passe" required>
                    </div>
                    <div class="formRgpd">
                        <input type="checkbox" name="rgpd" id="rgpd" required>En cochant cette case, j'accepte que mes données soient utilisées selon la <a href="#">Politique de confidentialité</a> de notre société.
                    </div>
                    <div class="boutonFlex">
                        <div><input type="reset" value="Effacer"></div>
                        <div><input type="submit" value="Valider"></div>
                    </div>
                </div>  
            </fieldset>        
        </form>
</main>