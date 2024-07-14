<?php
//Namespace 
namespace Controller;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

class Logout
{
    use MainController;
    public $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function index()
    {
        $ses = new \Model\Session();
        $ses->logout();
        redirect("home/LoggedOutSuccessfully");
    }

    public function edit()
    {
        $this->view("{$this->controller}");
    }
}