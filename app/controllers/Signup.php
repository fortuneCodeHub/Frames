<?php
//Namespace
namespace Controller; 
use Model\User;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

class Signup
{
    use MainController;
    public $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }
  
    public function index()
    {
        $req = new \Model\Request();
        if ($req->posted()) {
            if (!isset($_POST["term"])) {
                $_POST["term"] = "";
            }
            $user = new User();
            $user->signup($_POST);
            // This makes whatever is the output of the validation to the to be automatically set to the data array
            $data["user"] = $user;
            $this->view("{$this->controller}", $data);
        } else {
            $this->view("{$this->controller}");
        }
    }

    public function edit()
    {
        $this->view("{$this->controller}");
    }
}