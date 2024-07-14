<?php
// Namespace
namespace Controller;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

Trait MainController
{
    public function view($name, $data = []):void
    {
        if (!empty($data)) {
            extract($data);
        }
        $name = lcfirst($name);
        $filename = "../app/views/". $name. ".view.php";
        if(file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}