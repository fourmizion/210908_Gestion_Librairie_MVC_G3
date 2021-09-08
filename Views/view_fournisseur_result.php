<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">

        </div>
    </div> 

    <div class="ajust">
    <?php foreach($fournisseurs as $donnees): ?>

        <fieldset>
            <legend>Id_Fournisseur : <?= $donnees['Id_fournisseur'] ?></legend>
            <div class="image"></div>       
            <div class="flex">
                <div class="imageLarge"></div>  
                <div class="titre">
                    <div class="titreh2"><h2><?= $donnees['Raison_sociale'] ?></h2></div>
                    
                    <div class="details">
                        <div class="box1">
                            <p>Adresse :<?= $donnees['Rue_fournisseur'] ?></p>
                            <p>Code postal : <?= $donnees['Code_postal'] ?></p>
                            <p>Localité : <?= $donnees['Localite'] ?></p>
                            <p>Pays : <?= $donnees['Pays'] ?></p>
                        </div>
                        <div class="box1">
                            <p>Code fournisseur : <?= $donnees['Code_fournisseur'] ?> </p>
                            <p>Téléphone : <?= $donnees['Tel_fournisseur'] ?></p>
                            <p>Url : <?= $donnees['Url_fournisseur'] ?></p>
                            <p>Email : <?= $donnees['Email_fournisseur'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </fieldset>
        
        <?php endforeach; ?>
    </div>
</main>