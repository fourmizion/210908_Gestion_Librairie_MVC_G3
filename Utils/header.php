<header class="header">

    <div class="headerTop">
        <div class="headerLogo">
            <a href="?controller=home&action=home"><img src="Content/images/livre_palmier.png" alt=""></a>
        </div>

        <?php require_once("Utils/burger.php"); ?>


        <div class="headerNav">
        <?php if(isset($_SESSION['Statut'])): ?>
         <nav class="navbar">
                <div class="navElement">
                    <a href="?controller=home&action=home"> Accueil</a>
                </div>

                <div class="navElement">
                    <p>Livres</p>
                    <ul>
                        <li><a href="?controller=livre&action=livre_result">Tous</a></li>
                        <li><a href="?controller=livre&action=livre_auteur_form">Par auteur</a></li>
                        <li><a href="?controller=livre&action=livre_editeur_form">Par éditeur</a></li>
                        <li><a href="?controller=livre&action=livre_titre_form">Par titre</a></li>
                    </ul>
                </div>
                
                <div class="navElement">
                    <p>Fournisseurs</p>
                    <ul>
                        <li><a href="?controller=fournisseur&action=fournisseur_result">Tous</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_raison_form">Par raison sociale</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_localite_form">Par localité</a></li>
                    </ul>
                </div>
                
                <?php if(isset($_SESSION['Statut'])):
                if($_SESSION['Statut'] == "administrateur"): ?>
                <div class="navElement">
                    <p>Commandes</p>
                    <ul>
                        <li><a href="?controller=commande&action=commande_result">Toutes</a></li>
                        <li><a href="?controller=commande&action=commande_livre_editeur_form">Par éditeur</a></li>
                        <li><a href="?controller=commande&action=commande_fournisseur_raison_form">Par fournisseur</a></li>
                        <li><a href="?controller=commande&action=commande_date_form">Par date</a></li>
                    </ul>
                </div> 
                <?php endif; endif; ?>  
            </nav>
        </div>
            
        <?php endif; ?>

        
        <div class="headerNav">
            <nav class="navbar">
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

            <?php if(isset($_SESSION['Statut'])):
                if($_SESSION['Statut'] == "utilisateur"): ?>
                    <div class="headerPanier navElement">
                        <p>Panier</p>
                        <img src="Content/images/panier.png" alt="">
                    </div>
                <?php endif; endif; ?>

                <?php if(isset($_SESSION['Statut'])): ?>
                <div class="navElement">
                    <a href="?controller=compte&action=compte_deconnexion">Deconnexion</a>                  
                </div>
                <?php endif; ?>
            </nav>
        </div>       
    </div>
</header>
