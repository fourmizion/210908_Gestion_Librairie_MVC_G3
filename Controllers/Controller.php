<?php

abstract class Controller
{
    // Attributs _________________________________________________________________________
    abstract public function action_default();

    // Constructeur _________________________________________________________________________
    function __construct()
    {
        if (isset($_GET['action']) and method_exists($this, "action_" . $_GET['action']))
        {
            $action="action_" . $_GET['action'];
            $this->$action();
        }
        else
        {
            $this->action_default();
        }
    }

    // Méthodes _________________________________________________________________________
    function render ($vue, $data=[])
    {
        extract($data);
        $file_name = "Views/view_" . $vue . ".php";
        if(file_exists($file_name))
        {
            require_once($file_name);
        }
        else
        {
            $this->action_error("pas de vue");
        }
    }

    function action_error($message)
    {
        $data=['error'=> $message];
        $this->render('error', $data);
        die();
    }
}