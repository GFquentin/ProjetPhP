

<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0"
preserveAspectRatio="none"  width="100%" height="100%">
<?php 

$toto=0;

for ($i=0; $i < 10; $i++) { 
	echo "<rect width=\"300\" height=\"100\" cx=\"$toto\"cy=\"$toto\"stroke=\"black\"stroke-width=\"1\"fill=\"red\"/>";
 $toto = $toto + 50;
}

 ?>

</svg>



