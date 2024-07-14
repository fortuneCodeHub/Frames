<?php
// Namespace
namespace Frames;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");

/**
 * {CLASSNAME} class
 */

class {CLASSNAME}
{
    use Migration;

    public $table = "{classname}";

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
        $this->addColumn("date_created datetime NULL");
        $this->addColumn("date_updated datetime NULL");
        $this->addPrimaryKey("id");

        $this->createTable("{classname}");
        //Insert Data
        $this->addData("date_created", date("Y-m-d H:i:s"));
        $this->addData("date_updated", date("Y-m-d H:i:s"));
        $this->insertData("{classname}");
    }

    public function down()//To delete the table
    {
        $this->dropTable("{classname}");
    }
}

