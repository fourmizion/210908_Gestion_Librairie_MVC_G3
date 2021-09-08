<?php


class Controller_commande extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_commande_result()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_result()];
        $this->render("commande_result", $data);
    }
    // Trier commande par éditeur
    public function action_commande_livre_editeur_form()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_livre_editeur_form()];
        $this->render("commande_livre_editeur_form", $data);
    }

    public function action_commande_livre_editeur()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_livre_editeur()];
        $this->render("commande_livre_editeur", $data);
    }

    //Trier commande par fournisseur
    public function action_commande_fournisseur_raison_form()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_fournisseur_raison_form()];
        $this->render("commande_fournisseur_raison_form", $data);
    }

    public function action_commande_fournisseur_raison()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_fournisseur_raison()];
        $this->render("commande_fournisseur_raison", $data);
    }

    public function action_commande_date_form()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_date_form()];
        $this->render("commande_date_form", $data);
    }

    public function action_commande_date()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_commande_date()];
        $this->render("commande_date", $data);
    }
}

?>