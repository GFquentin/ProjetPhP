<?php

class TaskExecution extends Execution
{
    //<editor-fold desc="Properties">
    private $task;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($task)
    {
        $this->task=$task;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function run()
    {
        $this->starttime=date('Y-m-d H:i:s');
        $this->status=$this->task->run();

        return $this->status;
    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    //</editor-fold>
}
