  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="100%" height="100%" >
 <SCRIPT language=javascript>
    function OuvrirPopup(page,nom,option) {
       window.open(page,nom,option);
    }
  </SCRIPT>


<?php 
include('../model/db.php');
    $flowId = $_GET["flowId"];
    $query = "select * from taskflow where flowId = $flowId ORDER BY ordertask DESC limit 25";
    $prep = $db->prepare($query);
    $prep->execute();
    $arr = $prep->fetchAll();

	$position=0;

for ($i=0; $i < sizeof($arr); $i++) { 

	$valeur = $arr[$i];
	$query = "select script from task where id = $valeur[0] ";
	$prep = $db->prepare($query);
    $prep->execute();
    $script = $prep->fetch();
    $file = file_get_contents($script[0]);
	echo "<a  onclick=myFunction(\"$script[0]\")><rect x= 150  y= $position  width= 100 height= 80 /></a>";
	echo"$script[0]";

 	$position = $position + 100;
}


 ?>


<script>
function myFunction(valeur) {
    window.open("popupscript.php?chemin="  + valeur  , "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
} 
</script>


</svg>


