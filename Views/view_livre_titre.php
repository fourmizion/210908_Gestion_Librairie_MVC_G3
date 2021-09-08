<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">
            <form  action="?controller=livre&action=livre_titre"" method="POST" class="formLivre">
                <label for="titre">Recherchez un livre</label>
                <input type="text" name="titre" id="titre">

                <div class="searchButton">
                     <input type="image" src="Content/images/zoom.png">
                 </div>
            </form>
        </div>
    </div>

    <div class="ajust">
    <?php foreach($livres as $donnees): ?>

        <fieldset>
            <legend>Id_Livre : <?= $donnees['Id_Livre'] ?></legend>
            <div class="image"><img src="content/images/image_livres/<?= $donnees['Image_livre'] ?>" alt="<?= $donnees['Image_livre'] ?>"></div>       
            <div class="flex">
                <div class="imageLarge"><img src="content/images/image_livres/<?= $donnees['Image_livre'] ?>" alt="<?= $donnees['Image_livre'] ?>"></div>  
                <div class="titre">
                    <div class="titreh2"><h2><?= $donnees['Titre_livre'] ?></h2></div>
                    
                    <div class="details">
                        <div class="box1">
                            <p><b>Auteur : </b><?= $donnees['Prenom_auteur'].' '.$donnees['Nom_auteur'] ?></p>
                            <p><b>Thème : </b><?= $donnees['Theme_livre'] ?></p>
                            <p><b>Editeur : </b><?= $donnees['Editeur'] ?></p>
                            <p><b>Année : </b><?= $donnees['Annee_edition'] ?></p>
                        </div>
                        <div class="box1">
                            <p><b>ISNB : </b><?= $donnees['ISBN'] ?> </p>
                            <p><b>Format : </b><?= $donnees['Format_livre'] ?></p>
                            <p><b>Page : </b><?= $donnees['Nbr_pages_livre'] ?></p>
                            <p><b>Langue : </b><?= $donnees['Langue_livre'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p id="prix"><?= $donnees['Prix_vente'] ?> €</p>
            </div>
        </fieldset>
        
        <?php endforeach; ?>
    </div>

</main>


