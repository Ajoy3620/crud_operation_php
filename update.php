<?php
include 'connect.php';
$id = $_GET['updateid'];
$result = mysqli_query($con, "SELECT  * FROM crud WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "UPDATE crud set id='$id', name= '$name', email= '$email' , mobile= '$mobile' , password= '$password' WHERE id='$id'";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data Updated Successfully";
    header('location:display.php');
  } else {
    echo "Data Updated fail";
    die(mysqli_error($con));
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

        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value=<?php echo $name; ?>>
        <br> <br>
      </div>


      <div class="email">
        <label>Email:</label>

        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value=<?php echo $email; ?>>
        <br> <br>

      </div>
      <div class="mobile">
        <section class="mhaddle"><label>Mobile:</label>

          <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" value=<?php echo $mobile; ?>>
          <br><br>
        </section>


      </div>
      <div class="password">
        <label>Password:</label>

        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value=<?php echo $password; ?>>
        <br> <br>

      </div>
      <br>
      <button type="submit" class="btn" name="submit">Update</button>
    </form>
  </div>
</body>

</html>