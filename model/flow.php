<?php

class Flow
{
    //<editor-fold desc="Properties">
    private $id;
    private $name;
    private $interval;
    private $userId;
    private $tasklist;
    private $hostlist;
    private $userlist;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $name, $interval, $userId, $tasklist=null, $hostlist=null, $userlist=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->interval=$interval;
        $this->userId=$userId;
        $this->tasklist=$tasklist;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function run()
    {

    }

    public function addTask($taskId)
    {

    }

    public function removeTask($taskId)
    {

    }

    public function addHost($hostId)
    {

    }

    public function removeHost($hostId)
    {

    }

    public function addUser($userId)
    {

    }

    public function removeUser($userId)
    {

    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    private function getTaskList()
    {

    }

    private function getHostList()
    {

    }

    private function getUserList()
    {

    }

    public function hasTask($taskId)
    {

    }
    //</editor-fold>
}
?>
