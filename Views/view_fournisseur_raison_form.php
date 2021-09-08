<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">
            <form action="?controller=fournisseur&action=fournisseur_raison" method="POST" class="formLivre">
                <label for="nom">Choisissez un fournisseur</label>
                <select name="raison" id="nom" required>
                    <?php $_SESSION['raison'] = $fournisseurs; ?>
                    <?php foreach($fournisseurs as $donnees): ?>
                    <option value="<?= $donnees['Raison_sociale']; ?>"><?= $donnees['Raison_sociale']?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="searchButton">
                     <input type="image" src="Content/images/zoom.png">
                 </div>
            </form>
        </div>
    </div>
</main>
