<div>
    <form action="?controller=commande&action=commande_livre_editeur" method="POST">
        <label for="nom">Choisissez un éditeur</label>
        <select name="editeur" id="nom" required>
            <?php foreach($commandes as $donnees): ?>
            <option value="<?= $donnees['Editeur']; ?>"><?= $donnees['Editeur']; ?> </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Rechercher">
    </form>
</div>