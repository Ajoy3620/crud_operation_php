<?php
include  'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation</title>

</head>
<link href="userstyle.css" rel="stylesheet">

<body>
  <div class="container2">
    <button class="btn2"> <a href="user.php"> Add User </a>
    </button>
    <table>
      <thead>
        <tr>
          <th>SL NO</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Password</th>
          <th>Operation</th>

        </tr>
      </thead>

      <?php
      // sql query and * means all the data selected from the table 

      $sql = "SELECT * FROM crud";

      //for executive the query i create a variable name $result and pass mysqli_query method to peramitter($con, $sql)
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $password = $row['password'];


          echo '<tr>
       <th ="$row">' . $id . '</th>
       <td>' . $name . '</td>
       <td>' . $email . '</td>
       <td>' . $mobile . '</td>
       <td>' . $password . '</td>
       <td> 
    <button class="up">  <a href="update.php? updateid=' . $id . '">Update</a></button>
    <button class="de">  <a href="delete.php? deleteid=' . $id . '">Delete</a></button>
    
   

  </td>   
     </tr>';
        }
      }
      ?>
    </table>
  </div>
</body>

</html>