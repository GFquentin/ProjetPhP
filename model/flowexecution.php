<?php

class FlowExecution extends Execution
{
    //<editor-fold desc="Properties">
    private $flowId;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $flowId, $starttime, $status)
    {
        $this->id=$id;
        $this->flowId=$flowId;
        $this->starttime=$starttime;
        $this->status=$status;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    protected function run()
    {
    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    //</editor-fold>
}