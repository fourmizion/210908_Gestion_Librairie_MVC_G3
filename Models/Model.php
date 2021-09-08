<?php

class Model
{
    // Attributs _________________________________________________________________________
    private $bd;
    private static $instance = null;

    // Constructeur _________________________________________________________________________
    private function __construct()
    {
        try
        {
            $dsn = "mysql:host=localhost;dbname=gestion_librairie";
            $login = "root";
            $mdp = "";
            $this->bd = new PDO($dsn, $login, $mdp);
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("<p> Erreur [" . $e->getCode() . "] : " . $e->getMessage() . "</p>");
        }
    }

    // Méthodes _________________________________________________________________________

    // Fonction pour les livres ___________________________________________________

    public function get_livre_result()
    {
        $requete = $this->bd->prepare("SELECT * FROM livres order by Id_Livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // auteur _______________________________
    public function get_livre_auteur_form()
    {
        $requete = $this->bd->prepare("SELECT * FROM livres order by Nom_auteur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_livre_auteur()
    {
        $auteur = $_POST['auteur'];
        $requete = $this->bd->prepare("SELECT * FROM livres WHERE Nom_auteur='$auteur'");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // editeur _______________________________
        public function get_livre_editeur_form()
        {
            $requete = $this->bd->prepare("SELECT * FROM livres order by Editeur");
            $requete->execute();
            return $requete->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_livre_editeur()
        {
            $editeur = $_POST['editeur'];
            $requete = $this->bd->prepare("SELECT * FROM livres WHERE Editeur='$editeur'");
            $requete->execute();
            return $requete->fetchAll(PDO::FETCH_ASSOC);
        }

    // titre _______________________________
    public function get_livre_titre_form()
    {
        $requete = $this->bd->prepare("SELECT Titre_livre FROM livres");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_livre_titre()
    {
        $titre = $_POST['titre'];
        $requete = $this->bd->prepare("SELECT * FROM livres WHERE Titre_livre='$titre'");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }



    // Fonction pour les fournisseurs ___________________________________________________

    public function get_fournisseur_result()
    {
        $requete = $this->bd->prepare("SELECT * FROM fournisseurs");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // raison _______________________________
    public function get_fournisseur_raison_form()
    {
        $requete = $this->bd->prepare("SELECT Id_fournisseur, Raison_sociale FROM fournisseurs");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_fournisseur_raison()
    {
        $raison = $_POST['raison'];
        $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Raison_sociale='$raison'");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // localite _______________________________
    public function get_fournisseur_localite_form()
    {
        $requete = $this->bd->prepare("SELECT Id_fournisseur, Localite FROM fournisseurs");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_fournisseur_localite()
    {
        $ville = $_POST['ville'];
        $requete = $this->bd->prepare("SELECT * FROM fournisseurs WHERE Localite='$ville'");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fonction pour les commandes ___________________________________________________

    public function get_commande_result()
    {
        $requete = $this->bd->prepare("SELECT * FROM livres, fournisseurs, commandes WHERE livres.id_Livre=commandes.Id_Livre AND fournisseurs.Id_fournisseur=commandes.Id_fournisseur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_livre_editeur_form()
    {
        $requete = $this->bd->prepare("SELECT * FROM livres, commandes WHERE livres.Id_Livre=commandes.Id_Livre ");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_livre_editeur()
    {
        $editeur = $_POST['editeur'];
        $requete = $this->bd->prepare("SELECT * FROM livres, fournisseurs, commandes WHERE livres.Id_Livre=commandes.Id_Livre AND livres.Editeur='$editeur' AND fournisseurs.Id_fournisseur=commandes.Id_fournisseur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_fournisseur_raison_form()
    {
        $requete = $this->bd->prepare("SELECT * FROM fournisseurs, commandes  WHERE fournisseurs.Id_fournisseur=commandes.Id_fournisseur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_fournisseur_raison()
    {
        $fournisseur = $_POST['Raison_sociale'];
        $requete = $this->bd->prepare("SELECT * FROM livres, fournisseurs, commandes WHERE fournisseurs.Id_fournisseur=commandes.Id_fournisseur AND fournisseurs.Raison_sociale='$fournisseur' AND livres.Id_Livre=commandes.Id_Livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_date_form()
    {
        $requete = $this->bd->prepare("SELECT Id_commande, Date_achat FROM commandes");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_commande_date()
    {
        $date = $_POST['date'];
        $requete = $this->bd->prepare("SELECT * FROM livres, fournisseurs, commandes WHERE fournisseurs.Id_fournisseur=commandes.Id_fournisseur AND commandes.Date_achat='$date' AND livres.Id_Livre=commandes.Id_Livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fonctions compte ____________________________________________________

    public function get_compte_inscription_register()
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $requete = $this->bd->prepare("INSERT INTO membres(Nom, Prenom, Pseudo, Mail, Mdp) VALUES ('$nom', '$prenom', '$pseudo', '$mail', '$mdp')");
        $requete->execute();
    }

    public function get_compte_connexion()
    {
        $pseudomail = $_POST['pseudomail'];
        $mdp = $_POST['mdp'];
        $requete = $this->bd->prepare("SELECT * FROM membres WHERE Mdp='$mdp' AND Pseudo='$pseudomail' OR Mail='$pseudomail'" );
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }



    // Fonction GET MODEL __________________________________________________

    public static function get_model()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new Model();
        }
        return self::$instance;
    }
}
?>