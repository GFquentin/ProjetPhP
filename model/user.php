<?php

class User
{
    //<editor-fold desc="Properties">
    private $id;
    private $login;
    private $password;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $login, $password)
    {
        $this->id=$id;
        $this->login=$login;
        $this->password=$password;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    //</editor-fold>

    //<editor-fold desc="Functions">
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    public function getId()
    {

    }

    public function getLogin()
    {

    }

    public function getPassword()
    {

    }
    public function getUsers(){
        include '../model/db.php';
        $rep = $db->query('select * from user')->fetchAll(PDO::FETCH_ASSOC);
        return $rep;
    }
    //</editor-fold>
}

?>