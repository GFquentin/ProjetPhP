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
    public function saveDb() {
        include '../model/db.php';
        // Sauvegarde de l'objet flow
        // $name = $this->name;
        // $exec_time = $this->exec_time;
        $sql = ("INSERT INTO flow(name, exec_time) VALUES(:name, :exec_time)");
        // print_r($_POST);
        $req = $db->prepare($sql);
        if($req->execute(array('name' => $_POST['name_flow'],
        						'exec_time' => $_POST['exec_time']
        						)
        				)
        	) {
            echo 'Le flow a bien été ajouté à la base de données.';
        }
        else {
            echo 'Une erreur est survenue lors de l\'insertion';
        }
        $flow_id = $db->lastInsertId();
        // Sauvegarde du flowhost
        $sql = ("INSERT INTO flowhost(flowId, hostId) VALUES(:flowId, :hostId)");
        $req = $db->prepare($sql);
        $req->execute(array('flowId' => $flow_id,
        					'hostId' => $_POST['user_id']
        					)
        			);
        // Sauvegarde du flowuser
        $sql = ("INSERT INTO flowuser(flowId, userId) VALUES(:flowId, :userId)");
        $req = $db->prepare($sql);
        $req->execute(array('flowId' => $flow_id,
        					'userId' => $_POST['user_id']
        					)
        			);
        // Sauvegarde du taskflow [A améliorer car pas du tout conforme...]
        $taskId = $_POST['task_1'].'_'.$_POST['task_2'].'_'.$_POST['task_3'].'_'.$_POST['task_4'];
        $sql = ("INSERT INTO taskflow(taskId, flowId, ordertask) VALUES(:taskId, :flowId, :ordertask)");
        $req = $db->prepare($sql);
        $req->execute(array('taskId' => $taskId,
        					'flowId' => $flow_id,
        					'ordertask' => $taskId
        					)
        			);
    }
    //</editor-fold>
}
?>
