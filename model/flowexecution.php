<?php

class FlowExecution extends Execution
{
    //<editor-fold desc="Properties">
    private $flow;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($flow)
    {
        $this->flow=$flow;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function run()
    {
        $this->starttime=date('Y-m-d H:i:s');
        $this->status=$this->flow->runTasks();

        return $this->status;
    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    //</editor-fold>
}
