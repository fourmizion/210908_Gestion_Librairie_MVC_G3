<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">
            <form action="?controller=livre&action=livre_auteur" method="POST" class="formLivre">
                <label for="nom">Choisissez votre auteur</label>
                <select name="auteur" id="nom" required>
                    <?php $_SESSION['auteurs'] = $livres; ?>
                    <?php foreach($livres as $donnees): ?>
                    <option value="<?= $donnees['Nom_auteur']; ?>"><?= $donnees['Prenom_auteur'] . " " . $donnees['Nom_auteur']; ?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="searchButton">
                     <input type="image" src="Content/images/zoom.png">
                 </div>
            </form>
        </div>
    </div>
</main>
