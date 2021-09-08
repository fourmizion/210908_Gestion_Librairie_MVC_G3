<main class="main">
    <div class="headerBottom">  
        <div class="headerBanner">
        </div>
    </div>
<main>
<?php
    if($infos)
    {
        $_SESSION['Nom'] = $infos['Nom'];
        $_SESSION['Prenom'] = $infos['Prenom'];
        $_SESSION['Pseudo'] = $infos['Pseudo'];
        $_SESSION['Mail'] = $infos['Mail'];
        $_SESSION['Statut'] = $infos['Statut'];
    }
    else
    {
        echo "<script> alert('Identifiants incorrects.'); </script>";
    }
?>
<meta http-equiv="refresh" content="0;url=?controller=home&action=home"/>