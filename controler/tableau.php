<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Scheduler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
<?php
    include('../view/menu.php');
?>

    <div class="container">
      <h2>Les 25 dernieres executions de flow</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
<?php
          include('../model/db.php');

          $query = "select * from flowexecution ORDER BY id DESC limit 25";
          $prep = $db->prepare($query);
          $prep->execute();
          $arr = $prep->fetchAll();

          for ($i=0; $i < sizeof($arr); $i++) { 
            $valeur= $arr[$i];

            switch ($valeur[3]) {

              case 0:
                  echo "<tr class= success ><td>$valeur[1]</td><td>$valeur[2]</td><td>$valeur[3]</td></tr>";
                  break;
              case 1:
                  echo "<tr class= danger ><td>$valeur[1]</td><td>$valeur[2]</td><td>$valeur[3]</td></tr>";
                  break;
               default:
                  echo "<tr class= warning ><td>$valeur[1]</td><td>$valeur[2]</td><td>$valeur[3]</td></tr>";
                  break;

            }
                      
          }
?>
        </tbody>
      </table>
    </div>
  </body>
</html>