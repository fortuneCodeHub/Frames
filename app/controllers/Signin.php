<?php
//Namespace 
namespace Controller;
use \Model\User;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

class Signin
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
            $user = new User();
            $data["user"] = $user;
            $user->signin($_POST);
            $this->view("{$this->controller}",$data);
        } else {
            $this->view("{$this->controller}");   
        }
    }

    public function edit()
    {
        $this->view("{$this->controller}");
    }
}

// show_array($_POST);