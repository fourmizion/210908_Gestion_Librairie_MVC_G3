<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">
            <form action="?controller=livre&action=livre_editeur" method="POST" class="formLivre">
                <label for="nom">Choisissez un éditeur</label>
                <select name="editeur" id="nom" required>
                    <?php $_SESSION['editeurs'] = $livres; ?>
                    <?php foreach($livres as $donnees): ?>
                    <option value="<?= $donnees['Editeur']; ?>"><?= $donnees['Editeur']?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="searchButton">
                     <input type="image" src="Content/images/zoom.png">
                 </div>
            </form>
        </div>
    </div>
</main>
