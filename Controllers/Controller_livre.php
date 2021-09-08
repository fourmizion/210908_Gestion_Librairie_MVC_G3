<?php


class Controller_livre extends Controller
{

    // Home / Default ___________________________________________________________________
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    // All Livres ___________________________________________________________________
    public function action_livre_result()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_result()];
        $this->render("livre_result", $data);
    }

    // Auteur ___________________________________________________________________
    public function action_livre_auteur_form()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_auteur_form()];
        $this->render("livre_auteur_form", $data);
    }

    public function action_livre_auteur()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_auteur()];
        $this->render("livre_auteur", $data);
    }

    

    // Editeur ___________________________________________________________________
    public function action_livre_editeur_form()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_editeur_form()];
        $this->render("livre_editeur_form", $data);
    }

    public function action_livre_editeur()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_editeur()];
        $this->render("livre_editeur", $data);
    }
    
    // Titre ___________________________________________________________________
    public function action_livre_titre_form()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_titre_form()];
        $this->render("livre_titre_form", $data);
    }

    public function action_livre_titre()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_livre_titre()];
        // Render______
        // Résultat trouvé
        $trouve = false;
        foreach($data['livres'] as $donnees):
            if($_POST['titre'] == $donnees['Titre_livre'])
            {
                $trouve = true;
                $this->render("livre_titre", $data);
            }
        endforeach;
        // Aucun résultat
        if($trouve == false)
        {   
            $this->render("home", ["error" => "error"]);
        } 
    }
}

?>