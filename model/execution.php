<?php

abstract class Execution
{
    //<editor-fold desc="Properties">
    protected $id;
    protected $starttime;
    protected $status = null;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    //</editor-fold>

    //<editor-fold desc="Methods">
    abstract protected function run();
    //</editor-fold>

    //<editor-fold desc="Functions">
    protected function wasExecuted()
    {
        return ($this->status)?true:false;
    }
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    protected function getId()
    {
        return $this->id;
    }

    protected function getStarttime()
    {
        return $this->starttime;
    }

    protected function getStatus()
    {
        return $this->status;
    }
    //</editor-fold>
}

?>