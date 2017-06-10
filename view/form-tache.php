<?php
    //include('../layout.php');
?>
<!--
    Création du formulaire de création de tâche
-->
<!--<form action="/ProjetPhP/controler/createTask.php" method="post" enctype="multipart/form-data"> 
    <!--
        Création du formulaire tâche
    
    <div class="form-control">
        <!--input type="hidden" name="MAX_FILE_SIZE" value="1000" /> <!-- Restriction à 1000 octets >
        <label for="lienScript">Sélectionner le script de votre tâche :</label>
        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">

    </div>
    <button type="submit" value="Envoyer" class="form-control btn btn-primary col-md-3">Envoyer</button> <button type="reset" value="Effacer" class="form-control btn btn-warning col-md-3">Effacer</button>
</form> -->


<form action="createTask.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>