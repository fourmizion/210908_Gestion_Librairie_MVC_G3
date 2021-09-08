<div>
    <form action="?controller=commande&action=commande_fournisseur_raison" method="POST">
        <label for="nom">Choisissez une raison sociale</label>
        <select name="Raison_sociale" id="nom" required>
            <?php foreach($commandes as $donnees): ?>
            <option value="<?= $donnees['Raison_sociale']; ?>"><?= $donnees['Raison_sociale']; ?> </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Rechercher">
    </form>
</div>