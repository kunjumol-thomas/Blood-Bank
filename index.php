<?php 
require "db.php";
$sql = "SELECT *, year(current_date)- year(dob) as age FROM tbl_donors";
$statement = $db->prepare($sql);
$statement-> execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$rows = $statement->fetchAll();
// print_r($rows);
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/2ae35ec2f8.js" crossorigin="anonymous"></script>
</head>

<body>
 <?php require  "./componants/navbar.php"; ?>
  <div class="container">
   <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Hospital near</th>
          <th>Age</th>
          <th>Blood group</th>
          <th>Phone number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($rows as $row){
            echo "<tr>";
            echo "<td>";
            echo $row["name"];
            echo "</td>";
            echo "<td>";
            echo $row["hospital"];
            echo "</td>";
            echo "<td>";
            echo $row["age"];
            echo "</td>";
            echo"<td>";
            echo $row["blood_group"];
            echo "</td>";
            echo "<td>";
            echo $row["phone_number"];
            echo "</td>";

            echo"</tr>";
          }

        ?>
      </tbody>
    </table>
   </div>
  </div>
</body>
<script src="js/bootstrap.js"></script>

</html>