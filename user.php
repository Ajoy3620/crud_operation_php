<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  $sql = "INSERT INTO crud (name , email ,mobile , password)
         VALUES('$name' , '$email' , '$mobile' , '$password')";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data Inserted Successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}

?>

<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD OPERATION</title>
  <link href="userstyle.css" rel="stylesheet">
</head>

<body>

  <div>
    <form class="full" method="post">

      <div class="name">
        <label>Name:</label>

        <input type="text" class="form-control" placeholder="Enter Your Name" name="name">

      </div>


      <div class="email">
        <label>Email:</label>

        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">


      </div>
      <div class="mobile">
        <label>Mobile:</label>

        <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile">

      </div>

      <div class="password">
        <label>Password:</label>

        <input type="password" class="form-control" placeholder="Enter Your Password" name="password">


      </div>
      <br>
      <button type="submit" class="btn" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>