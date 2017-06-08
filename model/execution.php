<?php

abstract class Execution
{
    //<editor-fold desc="Properties">
    protected $starttime;
    protected $status = null;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    //</editor-fold>

    //<editor-fold desc="Methods">
    abstract public function run();
    //</editor-fold>

    //<editor-fold desc="Functions">
    protected function wasExecuted()
    {
        return ($this->status)?true:false;
    }
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    public function getId()
    {
        return $this->id;
    }

    public function getStarttime()
    {
        return $this->starttime;
    }

    public function getStatus()
    {
        return $this->status;
    }
    //</editor-fold>
}

?>
