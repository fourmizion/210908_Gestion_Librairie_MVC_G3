<div class="burger">
    <div class="burgerButton">
        <label for="burger">N</label>
        <input type="checkbox" id="burger">
        <div class="burgerNav">

                <div class="navElement">
                    <a href="?controller=home&action=home"> Accueil</a>
                </div>

                <div class="navElement">
                   <p>Connexion</p> 
                </div>
                
                <div class="headerPanier navElement">
                    <p>Panier</p>
                    <img src="Content/images/panier.png" alt="">
                </div>

                <div class="navElement">
                    <p>Livres</p>
                    <ul>
                        <li><a href="?controller=livre&action=livre_result"> Tous les livres</a></li>
                        <li><a href="?controller=livre&action=livre_auteur_form"> Trier par auteur</a></li>
                        <li><a href="?controller=livre&action=livre_editeur_form"> Trier par éditeur</a></li>
                        <li><a href="?controller=livre&action=livre_titre_form"> Trier par titre</a></li>
                    </ul>
                </div>

                <div class="navElement">
                    <p>Fournisseurs</p>
                    <ul>
                        <li><a href="?controller=fournisseur&action=fournisseur_result">Tous les fournisseurs</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_raison_form">Trier par raison sociale</a></li>
                        <li><a href="?controller=fournisseur&action=fournisseur_localite_form">Trier par localité</a></li>
                    </ul>
                </div>

                <div class="navElement">
                    <p>Commandes</p>
                    <ul>
                        <li><a href="?controller=commande&action=commande_result">Toutes les commandes</a></li>
                        <li><a href="?controller=commande&action=commande_livre_editeur_form">Trier par éditeur</a></li>
                        <li><a href="?controller=commande&action=commande_fournisseur_raison_form">Trier par fournisseur</a></li>
                        <li><a href="?controller=commande&action=commande_date_form">Trier par date</a></li>
                    </ul>
                </div> 
                 

            </div>

    </div>
    
</div>