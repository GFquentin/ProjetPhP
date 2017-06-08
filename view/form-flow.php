<!--
    Création du formulaire de création du flow
-->
<?php
    include('..layout.php');
?>
<div class="row">
    <div class="form-group col-md-12">
        <form action="/ProjetPhP/controler/createFlow.php" method="post">
            <div class="form-group">
                <label for="name_flow">Nom du flow : </label>
                <input type="text" class="form-control col-md-5" name="name_task" id="name_task"><BR>
            </div>
            <div class="form-group">
<?php
            $dataTask = $_POST['tasks'];
            $dataTask = array('ssh', 'ls', 'tar', 'rm', 'poweroff', 'reboot');
                
?>
                    <label for="select_task">Sélection de la tâche 1</label>
                    <select class="form-control col-md-8" name="select_task" id="select_task" type="select">

<?php
                        foreach ($dataTask as $key => $value) {

                            echo '<option value="'. $value .'">'. $value .'</option>';

                        }
?>
                    </select>
            </div>
            <div class="form-group">
<?php
            //$dataTask = $_POST['tasks'];
            $dataTask = array('ssh', 'ls', 'tar', 'rm', 'poweroff', 'reboot');
                
?>
                    <label for="select_task2">Sélection de la tâche 2</label>
                    <select class="form-control col-md-8" name="select_task2" id="select_task2" type="select">

<?php
                        foreach ($dataTask as $key => $value) {

                            echo '<option value="'. $value .'">'. $value .'</option>';

                        }
?>
                    </select>
            </div>
            <div class="form-group">
<?php
            //$dataHosts = $_POST['hosts'];
            $dataHosts = array('servNetwork', 'servWebProd', 'servWebDev', 'servIntranet');
                
?>
                    <label for="select_hosts">Sélection des hôtes</label>
                    <select class="form-control col-md-8" name="select_host" id="select_host" type="select">

<?php
                        foreach ($dataHosts as $key => $value) {

                            echo '<option value="'. $value .'">'. $value .'</option>';

                        }
?>
                    </select>
            </div>
            <div class="form-group">
<?php
            //$dataUsers = $_POST['users'];
            $dataUsers = array('Quentin', 'Anthony', 'Gabriel');
                
?>
                    <label for="select_hosts">Sélection des users</label>
                    <select class="form-control col-md-8" name="select_user" id="select_user" type="select">

<?php
                        foreach ($dataUsers as $key => $value) {

                            echo '<option value="'. $value .'">'. $value .'</option>';

                        }
?>
                    </select>
            </div>
            <button type="submit" value="Envoyer" class="form-control btn btn-primary col-md-3">Envoyer</button> <button type="reset" value="Effacer" class="form-control btn btn-warning col-md-3">Effacer</button>
        </form>
    </div>
</div>