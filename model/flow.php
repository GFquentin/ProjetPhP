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
    private $taskexecutionlist;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    public function __construct($id, $name, $interval, $tasklist=null, $hostlist=null, $userlist=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->interval=$interval;
        $this->tasklist=(isset($tasklist)?new ArrayObject():$tasklist);
        $this->hostlist=(isset($hostlist)?new ArrayObject():$hostlist);
        $this->userlist=(isset($userlist)?new ArrayObject():$userlist);
        $this->taskexecutionlist=new ArrayObject();
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function runTasks()
    {
        try
        {
            foreach ($this->tasklist as $task)
            {
                $taskexecution = new TaskExecution($task);
                $result=$taskexecution->run();
                $this->taskexecutionlist->append($taskexecution);

                if($result!=0)
                {
                    throw new Exception('Error: running task#'.$task->getId().' failed!');
                }
            }
        }
        catch (Exception $e)
        {
            echo "Exception: ", $e->getMessage();
        }

        //return resultat
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
        return array_key_exists($taskId, $this->tasklist);
    }

    public function getTask($taskId)
    {
        if($this->hasTask($taskId))
        {
            return $this->tasklist[$taskId];
        }
    }

    public function hasHost($hostId)
    {
        return array_key_exists($hostId, $this->hostlist);
    }

    public function hasUser($userId)
    {
        return array_key_exists($userId, $this->userlist);
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
