<?php

	include('connect.php');
  session_start();

  if(isset($_SESSION["id"])){
    header("Location:todo.php");
  }
	if (isset($_REQUEST['signup-submit'])) {
		if (($_REQUEST['username']=="")||($_REQUEST['pw']=="")) {
			
			echo '<script type="text/javascript">alert("fill all field");</script>';
			
		}  
    else{

      $username = $_REQUEST['username'];
      $sql = "SELECT username from cred where username=?";
      $result=$con->prepare($sql);
      $result->execute(array($username));
      $row=$result->fetchColumn();
      print_r($row);
      if($row>=1){
        echo '<script type="text/javascript">alert("unique");</script>';
       
      }else{
        $sql="INSERT into cred (username,pw) VALUES (?,?)";
        $username=$_REQUEST['username'];
        $pw=$_REQUEST['pw'];
      
        $result=$con->prepare($sql);
        $result->execute(array($username,md5($pw)));
         echo '<script type="text/javascript">alert("inserted successfully");</script>';
      }

			
		}
  }
  if (isset($_REQUEST['login-submit'])) {
		if (($_REQUEST['username']=="")||($_REQUEST['pw']=="")) {
			
			echo '<script type="text/javascript">alert("fill all field");</script>';
			
		}  
    else{
      $sql = "SELECT * from cred where username=? AND pw=? ";
      $username=$_REQUEST['username'];
      $pw=md5($_REQUEST['pw']);
      $result=$con->prepare($sql);
      $result->execute(array($username,$pw));
      $row = $result->fetch(PDO::FETCH_ASSOC);
      print_r($row);
      if($row['username']==$username && $row['pw']==$pw){
        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        header("Location: todo.php");
        }else{
          echo '<script type="text/javascript">alert("enter valide credencials");</script>';
        }
         
      }

			
		}
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="materialize/css/main.css"/>
    <title>ToDo</title>
</head>
<body class="cyan lighten-5">
    
  <nav>
    <div class="nav-wrapper cyan accent-2">
      <a href="index.php" class="center brand-logo indigo-text text-darken-4">ToDo</a>
    </div>
  </nav>
  <div><h2 class="truncate center"> Welcom to ToDo</h2></div>
  <ul class="collapsible popout cyan lighten-5">
    <li>
      <div class="collapsible-header"><i class="material-icons">login</i>LogIn</div>
      <div class="collapsible-body"><span>
          <form action="index.php" method="POST">
                <label class="black-text">User Name</label><br>
                <input placeholder="username" type="text" name="username"><br>
                
                <label class="black-text">PassWord</label><br>
                <input placeholder="password" type="text" name="pw"><br>
                <input  class="btn" type="submit" name="login-submit">
                
            </form>
            </span>
            </div>
        </li>
        <li>
      <div class="collapsible-header"><i class="material-icons">add</i>SignUp</div>
      <div class="collapsible-body"><span>
          <form action="index.php" method="POST">
                <label class="black-text">User Name</label><br>
                <input placeholder="username" type="text" name="username"><br>
                
                <label class="black-text">PassWord</label><br>
                <input placeholder="password" type="text" name="pw"><br>
                <input  class="btn" type="submit" name="signup-submit">
                
            </form>
            </span>
            </div>
        </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>About</div>
      <div class="collapsible-body"><span>We are Dhondu 😉</span></div>
    </li>
  </ul>
        




<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
          $(document).ready(function(){
    $('.collapsible').collapsible();
  });
        
      </script>

</body>
</html>
