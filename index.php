<?php
  include 'includes/class-autoload.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatile" content="ie=edge">
    <title>Aya Document</title>
  </head>
  <body>

      <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "oopphp16");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // Attempt select query execution
      $sql = "SELECT * FROM users";
      if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                  echo "<tr>";
                      echo "<th>id</th>";
                      echo "<th>first_name</th>";
                      echo "<th>last_name</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['user_id'] . "</td>";
                      echo "<td>" . $row['user_firstname'] . "</td>";
                      echo "<td>" . $row['user_lastname'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          } else{
              echo "No records matching your query were found.";
          }
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

      // Close connection
      mysqli_close($link);

?>
  </body>
</html>
