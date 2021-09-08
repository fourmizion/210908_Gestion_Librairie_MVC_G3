<main class="main">
    <div class="headerBottom">  
        <div class="headerBanner">
        </div>
    </div>

    <div class="centre">
        <table>
            <tr>
                <th>Id Commande</th>
                <th>Id Livre</th>
                <th>Id Fournisseur</th>
                <th>Date d'achat</th>
                <th>Prix d'achat</th>
                <th>Quantité</th>
                
            </tr>
            <tr>
<?php foreach($commandes as $donnees): ?>

        <td> <?= $donnees['Id_commande'] ?></td>
        <td> <?= $donnees['Editeur'] ?></td>
        <td> <?= $donnees['Raison_sociale'] ?></td>
        <td> <?= $donnees['Date_achat'] ?></td>
        <td> <?= $donnees['Prix_achat'] ?></td>
        <td> <?= $donnees['Nbr_exemplaires'] ?></td>
        
        </tr>
<?php endforeach; ?>
        </table>
    </div>
</main>

