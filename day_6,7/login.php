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
			width:100;
			height:100vh;
			background-size: 100%;
    		}
label{color: #FFFFFF;}
.style{
    border:1px solid black;
    border-radius: 10px;
    margin-top: 10%;


}

.style h2
{
    justify-content: center;
    margin: 15px;

}



.style button{

    width: 310px;
    margin-top: 10px;
}
.style a{

    width: 310px;
    margin-top: 10px;
    margin-bottom:6px;
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

                <h2>Login</h2>
                <form action ="login.php" method="post">
                    <div>
                        <label for="Username">Username</label><br>
                        <input type="text" name="username">
                    </div><br>
                    <div>
                        <label for="password">Password</label><br>
                        <input type="password" name="password">
                    </div><br>
                    <div>
                        <label for="loginas"> Login As</label><br>
                        <select name="logins">
                        <option value="LoginAs">...</option>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                        </select>
                    </div><br>
                  <div>
                    <button type="submit" class="btn btn-warning" name="login">Login</button>

                    <a class="btn btn-warning" href="register.php" role="button">Register</a>

                  </div>
                </form>




        </div>
    </div>
</section>
</section>
</section>
</body>
</html>

<?php
if(isset($_POST['login']))
{
  session_start();
  $userid=$_POST['username'];
  $pass=$_POST['password'];
  $type=$_POST['logins'];
if($userid=="" && $pass=="")
{
  echo "<br><center><h3>Please enter the all Credentials<h3></center>";
}
elseif ($userid=='admin' && $pass=='iAdmin123' && $type=='admin') {
  //admin username=admin password=iAdmin123 select type as admin
  $_SESSION['admin']=="Admin";
  header('Location:admin.php');
}
else  {
  $sql1="SELECT `Userid`,`Password` FROM $table WHERE `Userid`='$userid' " ;
  $check=mysqli_query($conn, $sql1);
  $count=mysqli_num_rows($check);
  if($count!=0)
  {
    while($row=mysqli_fetch_assoc($check)){
      $dbusername=$row['Userid'];
      $dbpassword=$row['Password'];
    }
    if($userid==$dbusername && $pass==$dbpassword){
      $_SESSION['username']=$userid;
      header('Location:student.php');
    }
    else {
      echo "<center><h3>Incorrect username or Password</h3></center>";
    }
  }

}
}
?>
