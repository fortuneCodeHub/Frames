<?php
//Namespace 
namespace Controller;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

/**
 * Pager class
 */

class Pager
{
    use MainController;

    public $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function index()
    {
        $this->view("{$this->controller}");
    }

    public function edit()
    {
        $this->view("{$this->controller}");
    }
}