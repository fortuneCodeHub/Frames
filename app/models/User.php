<?php
// Namespace
namespace Model;
// Deny access to some pages
defined("ROOTPATH") OR exit("Access Denied");


class User 
{
    use MainModel;

    public $table = "users";
    protected $primaryKey = "id";
    protected $allowedColumns = [
        "name", "age", "email", "password", "term"
    ];
    public $validate_data = [];
    /************************
     * rules include:
     * alpha,
     * alpha_space,
     * email,
     * unique,
     * not_less_than_8_chars,
     * required,
     * alpha_numeric,
     * alpha_symbol,
     * alpha_numeric_symbol
     * 
     * NOTE- That the lower the rule is in the array the higher it's priority
    ************************/
    protected $validationRules = [
        "name" => [
            "unique",
            "alpha_space",
            "required"
        ],
        "age" => [
            "required"
        ],
        "email" => [
            "unique",
            "email",
            "required"
        ],
        "password" => [
            "not_less_than_8_chars",
            "required"
        ],
        "rptpassword" => [
            "not_less_than_8_chars",
            "required"
        ],
        "term" => [
            "required"
        ]
    ];

    protected $CheckandValidateRules = [
        "name" => [
            "required"
        ],
        "password" =>[
            "required"
        ]
    ];

    // public function getname()
    // {
    //     return "Fish is for free";
    // } 


    public function showCheckValidate()
    {
        echo "<pre>";
        print_r($this->CheckandValidateRules);
        echo "</pre>";
    }
 
    public function signup($data)
    {
        if ($this->validate($data)) {
            // Add more validation to the form
            $validatedData = $this->validate_data;
            if (!empty($validatedData)) {
                // Check the passwords whether they match
                if(!empty($validatedData["rptpassword"]) && !empty($validatedData["password"])) {
                    if ($validatedData["password"] == $validatedData["rptpassword"]) {
                        $validatedData["password"] = password_hash($validatedData["password"], PASSWORD_DEFAULT);
                    } else {
                        $this->errors["passwordErr"] = "The password and repeat password you inputed don't match";
                        $this->errors["rptpasswordErr"] = "The password and repeat password you inputed don't match";
                    }
                }
            }

            if (empty($this->errors)) {
                $this->insert($validatedData);
                redirect("signin");
            } else {
                return false;
            }
        }
        return false;
    }

    public function signin($data)
    {
        $emailNotExist = "";
        if ($this->check_validate($data)) {
            $validatedData = $this->validate_data;
            if(!empty($validatedData)) {
                if($data["name"]) {
                    if (empty($this->errors)) {
                        $users = $this->query("SELECT * FROM ".$this->table);
                        foreach ($users as $user) {
                            if ($data["name"] == $user["name"] || $data["name"] == $user["email"]) {
                                $pwdhashed = $user["password"];
                                $checkpwd  = password_verify($data["password"], $pwdhashed);
                                if ($checkpwd) {
                                    $this->validate_data["id"] = $user["id"];
                                    foreach ($this->validate_data as $key => $value) {
                                        if ($key == "password") {
                                            continue;
                                        }
                                        $userV[$key] = $value;
                                    }
                                    $ses = new \Model\Session();
                                    $ses->auth_user($userV);
                                    redirect("home");
                                    return true;
                                } else {
                                    $this->errors["passwordErr"] = "This password is incorrect or it does not exist";
                                    return false;
                                }
                            }
                        }
                        $this->errors["nameErr"] = "The username or email you put is incorrect or does not exist";
                        return false;
                    } else {
                        return false;
                    }
                }
            }
        }
        return false;
    }
}
