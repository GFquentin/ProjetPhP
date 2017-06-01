<?php

class Flow
{
    //<editor-fold desc="Properties">
    private $id;
    private $name;
    private $interval;
    private $tasklist;      // Array: index=taskId; Task (class) - order by taskflow.ordertask
    private $hostlist;      // Array: index=hostId; Host (class)
    private $userlist;      // Array: index=userId; User (class)
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $name, $interval, $tasklist=null, $hostlist=null, $userlist=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->interval=$interval;
        $this->tasklist=$tasklist;
        $this->hostlist=$hostlist;
        $this->userlist=$userlist;
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function run()
    {

    }

    public function addTask($taskId)
    {
        if(!$this->hasTask($taskId))
        {

        }
    }

    public function removeTask($taskId)
    {
        if($this->hasTask($taskId))
        {

        }
    }

    public function addHost($hostId)
    {
        if(!$this->hasTask($hostId))
        {

        }
    }

    public function removeHost($hostId)
    {
        if($this->hasTask($hostId))
        {

        }
    }

    public function addUser($userId)
    {
        if(!$this->hasTask($userId))
        {

        }
    }

    public function removeUser($userId)
    {
        if($this->hasTask($userId))
        {

        }
    }
    //</editor-fold>

    //<editor-fold desc="Functions">
    public function hasTask($taskId)
    {

    }

    public function hasHost($hostId)
    {

    }

    public function hasUser($userId)
    {

    }
    //</editor-fold>

    //<editor-fold desc="Getters & Setters">
    public function getTaskList()
    {
        return $this->tasklist;
    }

    public function getHostList()
    {
        return $this->hostlist;
    }

    public function getUserList()
    {
        return $this->userlist;
    }
    //</editor-fold>
}
?>
