<?php
//Namespace 
namespace Controller;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");
class Home
{
    use MainController;
    public $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function index()
    {
        $file1 = "assets/images/car.jpg";
        $Image = new \Model\Image();
        $data["Thumbnail"] = $Image->getThumbnail($file1, 80, 80);
        $ses = new \Model\Session();
        $data["sessions"] = $ses->user();
        $data["file1"] = $file1;
        $this->view("{$this->controller}", $data);
    }

    public function edit()
    {
        $this->view("{$this->controller}");
    }
}