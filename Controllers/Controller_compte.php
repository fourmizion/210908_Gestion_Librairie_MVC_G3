<?php

class Controller_compte extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    // Inscription _______________________________
    public function action_compte_inscription_form()
    {
        $this->render("compte_inscription_form");
    }

    public function action_compte_inscription_register()
    {
        $m = Model::get_model();
        $m->get_compte_inscription_register();
        $this->render("home");
    }

    // Connexion _________________________________

    public function action_compte_connexion()
    {
        $m = Model::get_model();
        $data = ["infos" => $m->get_compte_connexion()];
        $this->render("compte_connexion",$data);
    }

    // Deconnexion _______________________________
    public function action_compte_deconnexion()
    {
        $this->render("compte_deconnexion");
    }
}
?>