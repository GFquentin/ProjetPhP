<?php

class JobChecker
{
    //<editor-fold desc="Properties">
    private static $instance;
    private $flowlist;
    private $flowexecutionlist;
    //</editor-fold>

    //<editor-fold desc="Constructor">
    private function __construct()
    {
        $this->flowexecutionlist=new ArrayObject();
    }
    //</editor-fold>

    //<editor-fold desc="Methods">
    public function runFlows()
    {
        try
        {
            $this->flowlist=$this->getRunFlowList();

            foreach ($this->flowlist as $flowid => $flow)
            {
                $flowexecution = new FlowExecution($flow);
                $result=$flowexecution->run();
                $this->flowexecutionlist->append($flowexecution);

                if($result!=0)
                {
                    throw new Exception('Error: running flow#'.$flowid.' failed!');
                }
            }
        }
        catch (Exception $e)
        {
            echo "Exception: ", $e->getMessage();
        }
    }

    //</editor-fold>

    //<editor-fold desc="Functions">
    public static function getInstance()
    {
        if(isset(self::$instance))
        {
            self::$instance=new self();
        }

        return self::$instance;
    }

    private function getRunFlowList()
    {
        return null;
    }
    //</editor-fold>
}
?>
