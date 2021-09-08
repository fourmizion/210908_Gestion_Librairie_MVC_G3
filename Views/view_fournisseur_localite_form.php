<main class="main">
    <div class="headerBottom">
        <div class="headerBanner">
            <form action="?controller=fournisseur&action=fournisseur_localite" method="POST" class="formLivre">
                <label for="nom">Choisissez une ville</label>
                <select name="ville" id="nom" required>
                    <?php $_SESSION['localite'] = $fournisseurs; ?>
                    <?php foreach($fournisseurs as $donnees): ?>
                        <option value="<?= $donnees['Localite']; ?>"><?= $donnees['Localite']?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="searchButton">
                     <input type="image" src="Content/images/zoom.png">
                 </div>
            </form>
        </div>
    </div>
</main>
