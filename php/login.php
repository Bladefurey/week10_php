<?php
  include_once('dbuser.php');
  if(isset($_POST['login'])){
    $sql="select * from user";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_num_rows($result);
    if($row>0){
      while($row=mysqli_fetch_assoc($result)){
        session_start();
        if(isset($_POST['username']) && isset($_POST['password'])){
          if($_POST['username']==$row['username'] && $_POST['password']==$row['password']){
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];
            header("location:welcome.php");
          }
          else{
            $_SESSION['error']="invalid";
          }
        }
      }
    }
    else{
      echo "There is no Data.";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">Host Myanmar(Mandalay)</h2>
                  
		        <div class="login-wrap">
		            <input type="text" id="name" name="username" class="form-control" placeholder="User ID" autofocus >
                <span id="nameerror" style="color:red"></span>
		            <br>
		            <input id="pwd" type="password" name="password" class="form-control" placeholder="Password" ><br >
                <span id="pwerror" style="color:red"></span>
		            <input  id="login" name="login" class="btn btn-theme btn-block" type="submit">
                <?php
                if(isset($_SESSION['error']))
                {
                  if($_SESSION['error']=="invalid")
                  echo "<span style='color:red'>Invalid username and password</span>";
                }
                ?> 
                </div>
                
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/myjs.js"></script>
    


  </body>
</html>