<?php

class Task
{
    //<editor-fold desc="Properties">
    private $id;
    private $script;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $script)
    {
        $this->id=$id;
        $this->script=$script;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function run()
    {
        $result=null;

        if ($this->checkScriptExist())
        {
            $output=new ArrayObject();
            exec("bash ".$this->script, $output, $result);
        }

        return $result;
    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    private function checkScriptExist()
    {
        return file_exists($this->script);
    }
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    public function getId()
    {

    }

    public function getScript()
    {

    }
    //</editor-fold>
}
?>
