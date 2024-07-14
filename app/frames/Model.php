<?php 
// Namespace
namespace Frames;

// Deny access to some pages
defined("CPATH") OR exit("Access Denied");

/** 
 *  Database Class
 *  
 */

class MainModel
{
    use \Model\MainModel;
}