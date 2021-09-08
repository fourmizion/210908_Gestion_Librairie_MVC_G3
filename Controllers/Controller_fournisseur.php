<?php


class Controller_fournisseur extends Controller
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

    // All Fournisseurs ___________________________________________________________________
    public function action_fournisseur_result()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_fournisseur_result()];
        $this->render("fournisseur_result", $data);
    }

    // Raison sociale ___________________________________________________________________

    public function action_fournisseur_raison_form()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_fournisseur_raison_form()];
        $this->render("fournisseur_raison_form", $data);
    }

    public function action_fournisseur_raison()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_fournisseur_raison()];
        $this->render("fournisseur_raison", $data);
    }

    // Localite ___________________________________________________________________
    public function action_fournisseur_localite_form()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_fournisseur_localite_form()];
        $this->render("fournisseur_localite_form", $data);
    }

    public function action_fournisseur_localite()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_fournisseur_localite()];
        $this->render("fournisseur_localite", $data);
    }
}

?>