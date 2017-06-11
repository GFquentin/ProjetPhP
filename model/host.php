<?php

class Host
{
    //<editor-fold desc="Properties">
    private $id;
    private $name;
    private $ip;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $name, $ip)
    {
        $this->id=$id;
        $this->name=$name;
        $this->ip=$ip;
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

    public function getName()
    {

    }

    public function getIp()
    {

    }
    public function getHosts() {
        include '../model/db.php';
        $rep = $db->query('select * from host')->fetchAll(PDO::FETCH_ASSOC);
        return $rep;
    }
    //</editor-fold>
}

?>