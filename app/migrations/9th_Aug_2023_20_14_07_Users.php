<?php
// Namespace
namespace Frames;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

/**
 * Users class
 */

class Users
{
    use Migration;
    
    public $table = "users";

    public function up() //To create the table
    {
        /** Allowed Methods  */
        /**
         * $this->addColumn();
         * $this->addPrimaryKey();
         * $this->addUniqueKey();
         * $this->addData();
         * $this->insertData();
         * $this->createTable();
         */
        //Create a table
        $this->addColumn("id int(17) NOT NULL AUTO_INCREMENT");
        $this->addColumn("name varchar(200) NOT NULL");
        $this->addColumn("age varchar(17) NOT NULL");
        $this->addColumn("email varchar(2000) NOT NULL");
        $this->addColumn("password varchar(2000) NOT NULL");
        $this->addColumn("term varchar(100) NOT NULL");
        $this->addColumn("date datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()");
        $this->addPrimaryKey("id");
        $this->addUniqueKey("email");

        $this->createTable("users");
        //Insert Data
        $this->addData("name", "Fortune");
        $this->addData("age", "21");
        $this->addData("email", "fortunenwohiri@gmail.com");
        $this->insertData("users");
    }

    public function down()//To delete the table
    {
        $this->dropTable("users");
    }
}

