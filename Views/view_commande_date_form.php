<div>
    <form action="?controller=commande&action=commande_date" method="POST">
        <label for="nom">Choisissez une raison sociale</label>
        <select name="date" id="nom" required>
            <?php foreach($commandes as $donnees): ?>
            <option value="<?= $donnees['Date_achat']; ?>"><?= $donnees['Date_achat']; ?> </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Rechercher">
    </form>
</div>