<?php

class Task
{
    //<editor-fold desc="Properties">
    private $id;
    private $script;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    // Constructeur pour appeler un objet
    public function __construct($id, $script)
    {
        $this->id=$id;
        $this->script=$script;
    }
    // Constructeur pour sauvegarder un objet
   
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

    public function getTask()
    {
        include '../model/db.php';
        $rep = $db->query('select * from task')->fetchAll(PDO::FETCH_ASSOC);
        return $rep;
        //var_dump($rep);
    }
    // Méthode pour sauvegarder une task
    public function saveDb() {
        include '../model/db.php';
        $scriptPath = $this->script;
        $sql = ("INSERT INTO task(script) VALUES(:script)");
        
        $req = $db->prepare($sql);
        if($req->execute(array('script' => $scriptPath))) {
            echo 'La tâche a bien été ajoutée à la base de données.';
        }
        else {
            echo 'Une erreur est survenue lors de l\'insertion';
        }
    }
    //</editor-fold>
}
?>
