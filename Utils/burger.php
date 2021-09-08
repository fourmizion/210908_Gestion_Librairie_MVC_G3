<div class="burger">
    <div class="burgerButton">
        <label for="burger">N</label>
        <input type="checkbox" id="burger">
        <div class="burgerNav">

                <div class="navElement">
                    <a href="?controller=home&action=home"> Accueil</a>
                </div>

                <!-- CONNEXION -->
                <?php if(!isset($_SESSION['Statut'])): ?>
                <div class="navElement">
                <p>Connexion</p>
                    <ul>
                        <li>
                            <form method="POST" action="?controller=compte&action=compte_connexion">
                                <div class="formulaire">  
                                    <div class="formFlex">
                                        <label for="pseudo">Pseudo ou E-mail :</label>
                                        <input type="text" name="pseudomail" id="Pseudo" placeholder="Entrer votre pseudo ou votre e-mail" required>
                                    </div>
                                    <div class="formFlex">
                                        <label for="mdp2">Mot de passe :</label>
                                        <input type="password" name="mdp" id="mdp" placeholder="Saisissez votre mot de passe" required>
                                    </div>
                                    <div class="boutonFlex">
                                        <div><input type="submit" value="Valider"></div>
                                    </div>
                                </div>
                                <a href="?controller=compte&action=compte_inscription_form">Inscription</a>
                                </fieldset>   
                            </form>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if(isset($_SESSION['Statut'])): ?>
                <div class="navElement">
                    <a href="?controller=compte&action=compte_deconnexion">Deconnexion</a>                  
                </div>
                <?php endif; ?>
                
                <!-- PANIER -->
                <?php if(isset($_SESSION['Statut'])):
                if($_SESSION['Statut'] == "utilisateur"): ?>
                <div class="headerPanier navElement">
                    <p>Panier</p>
                    <img src="Content/images/panier.png" alt="">
                </div>
                <?php endif; endif; ?>

                <!-- LIVRES -->
                <div class="navElement">
                    <p>Livres</p>
                    <ul>
                        <li><a href="?controller=livre&action=livre_result"> Tous les livres</a></li>
                        <li><a href="?controller=livre&action=livre_auteur_form"> Trier par auteur</a></li>
                        <li><a href="?controller=livre&action=livre_editeur_form"> Trier par éditeur</a></li>
                        <li><a href="?controller=livre&action=livre_titre_form"> Trier par titre</a></li>
                    </ul>
                </div>
                
                <!-- FOURNISSEURS -->
                <div class="navElement">
                    <p>Fournisseurs</p>
                    <ul>
                        <li><a href="?controller=fournisseur&action=fournisseur_result">Tous les fournisseurs</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_raison_form">Trier par raison sociale</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_localite_form">Trier par localité</a></li>
                    </ul>
                </div>


                <!-- COMMANDES -->
                <?php if(isset($_SESSION['Statut'])):
                if($_SESSION['Statut'] == "administrateur"): ?>
                <div class="navElement">
                    <p>Commandes</p>
                    <ul>
                        <li><a href="?controller=commande&action=commande_result">Toutes les commandes</a></li>
                        <li><a href="?controller=commande&action=commande_livre_editeur_form">Trier par éditeur</a></li>
                        <li><a href="?controller=commande&action=commande_fournisseur_raison_form">Trier par fournisseur</a></li>
                        <li><a href="?controller=commande&action=commande_date_form">Trier par date</a></li>
                    </ul>
                </div> 
                <?php endif; endif; ?>  
                 

            </div>

    </div>
    
</div>