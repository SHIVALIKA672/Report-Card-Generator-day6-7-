<?php
$username = "root";
$password = "";
$db="studentportal";
$table="student_data";
$conn = mysqli_connect("localhost", $username, $password,$db) or die(mysqli_connect_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.bg{
			background: url('../day_6,7/image2.jpg');
			width:100%;
			height:100%;
			background-size: 100%;
    		}
label{color: #FFFFFF;}
.style{
    border:1px solid black;
    border-radius: 10px;
    margin-top: 8%;


}

.style h2
{
    justify-content: center;
    margin: 15px;

}
.style button{

    width: 310px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.style a{

    width: 310px;
    margin-top: 10px;
    margin-bottom:10px;
}
.style input{
    width: 310px;
    border-radius: 10px;
}

</style>
<body>
  <section class="container-fluid bg">
	<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3 style">
    <nav class="nav justify-content-center fixed-top bg-primary">
      <h2 style="color: aliceblue;">Student Portal</h2>
    </nav>
    <div class="container">
        <div class="row">
            <h2>Register</h2>
<form  method="post">
    <div>
        <label for="fname">Firstname</label><br>
        <input type="text" name="fname">
    </div><br>
    <div>
        <label for="lname">Lastname</label><br>
        <input type="text" name="lname">
    </div><br>
    <div>
        <label for="email">Email</label><br>
        <input type="text" name="email">
    </div><br>
    <div>
        <label for="userid">Set Username</label><br>
        <input type="text" name="uname">
    </div><br>
    <div>
        <label for="pass">Set Password</label><br>
        <input type="password" name="pname">
    </div><br>
    <div><button type="submit" class="btn btn-warning" name="register">Register</button></div>
    <div><a class="btn btn-warning" href="login.php" role="button">Back</a></div>
</form>
</div>

</div>
</section>
</section>
</section>
</body></html>
<?php
if(isset($_POST['register'])){
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $Email=$_POST['email'];
  $Userid=$_POST['uname'];
  $Password=$_POST['pname'];
if($Userid!=NULL && $Password!=NULL)
{
  $sql="INSERT INTO `student_data`( `Firstname`, `Lastname`, `Email`, `Userid`, `Password`, `PHP`, `HTML`, `MYSQL`, `Total`, `Percentage`) VALUES ('$firstname','$lastname','$Email','$Userid','$Password',0,0,0,0,0)";
  if(mysqli_query($conn, $sql)){
      echo "<br><center><h3>Registeration Successfull please Login to view your Result</h3></center><br>";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
else {
  echo "<br><center><h3>Please enter All the Credentials</h3></center>";
}

  mysqli_close($conn);
}
?>
