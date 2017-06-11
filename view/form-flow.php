<!--
    Création du formulaire de création du flow
-->
<div class="row">
    <div class="form-group col-md-12">
        <form action="/ProjetPhP/controler/createFlow.php" method="post">
            <div class="form-group">
                <label for="name_flow">Nom du flow : </label>
                <input type="text" class="form-control col-md-5" name="name_task" id="name_task"><BR>
            </div>
            <div class="form-group">
<?php
                for ($i=1; $i < 5; $i++) {              
                    echo '<label for="task_'.$i.'">Sélection de la tâche '.$i.'</label>
                    <select class="form-control col-md-8" name="task_'.$i.'" id="task_'.$i.'" type="select">'; 
                    foreach ($dataTasks as $key => $value) {
                        print_r($value['id']);
                        echo '<option value="'. $value['id'] .'">'. $value['script'] .'</option>';
                    }
                    echo '</select><br/>';
                }
?>
            </div>
            <div class="form-group">
                    <label for="select_hosts">Sélection des hôtes</label>
                    <select class="form-control col-md-8" name="select_host" id="select_host" type="select">
<?php
                        foreach ($dataHosts as $key => $value) {
                            echo '<option value="'. $value['id'] .'">'. $value['name'] .'</option>';
                        }
?>
                    </select>
            </div>
            <div class="form-group">
                    <label for="select_users">Sélection des users</label>
                    <select class="form-control col-md-8" name="select_user" id="select_user" type="select">
<?php
                        foreach ($dataUsers as $key => $value) {

                            echo '<option value="'. $value['id'] .'">'. $value['login'] .'</option>';

                        }
?>
                    </select>
            </div>
            <button type="submit" value="Envoyer" class="form-control btn btn-primary col-md-3">Envoyer</button> <button type="reset" value="Effacer" class="form-control btn btn-warning col-md-3">Effacer</button>
        </form>
    </div>
</div>