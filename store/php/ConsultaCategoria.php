<?php
  $host = "localhost";
  $user = "root";
  $db = "dbstoreproducts";
  $enlace = mysql_connect($host, $user);
  mysql_select_db($db, $enlace);
  $result = mysql_query("SELECT category.id_Category, category.description FROM `category`", $enlace);
  echo "<table border='2'> <tr><td>IdCategoria:</td><td>Descripción:</td></tr><tr>";
      while($fila = mysql_fetch_row($result))
      {
        echo "<tr>";
          echo "<td>".$fila[0];
        echo "</td><td>".$fila[1]."</td>";
      }
  mysql_close($enlace); 
?>
