<?php

class TaskExecution extends Execution
{
    //<editor-fold desc="Properties">
    private $taskId;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $taskId, $starttime, $status)
    {
        $this->id=$id;
        $this->taskId=$taskId;
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