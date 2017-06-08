<?php
include('../view/menu.php');
?>

<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0"      width="1100px" height="1100px" >
<?php 
include('../model/db.php');

    $query = "select * from flowexecution ORDER BY id DESC limit 25";
    $prep = $db->prepare($query);
    $prep->execute();
    $arr = $prep->fetchAll();
$toto=0;

for ($i=0; $i < 10; $i++) { 
	echo "<rect x= $toto  y= 20  rx= 20  ry= 20  width= 140 height= 100 />";
 $toto = $toto + 150;
 printf($toto);
}

 ?>

</svg>



