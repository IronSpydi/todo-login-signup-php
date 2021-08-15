<?php
include('connect.php');
session_start();

if(!isset($_SESSION["id"])){
  header("Location:index.php");
}
if (isset($_REQUEST['submit'])) {
  if (($_REQUEST['taskname']=="")||($_REQUEST['task']=="")) {
    
    echo '<script type="text/javascript">alert("fill all field");</script>';
    
  }  
  else{

    
    $sql="INSERT into task (id,username,taskname,task) VALUES (?,?,?,?)";
    $id=$_SESSION["id"];
    $username=$_SESSION["username"];

    $taskname = $_REQUEST['taskname'];
    $task = $_REQUEST['task'];
    $result=$con->prepare($sql);
    $result->execute(array($id,$username,$taskname,$task));
    echo '<script type="text/javascript">alert("task loaded");</script>';
     
  
    
  }
}
if(isset($_REQUEST["delete"])){
  
  $sql="DELETE FROM task WHERE did=?";
  $did=$_REQUEST['did'];
  $result=$con->prepare($sql);
  $result->execute(array($did));
  echo '<script type="text/javascript">alert("task completed");</script>';
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
    <title>ToDo</title>
</head>
<body>
    

  <nav>
    <div class="nav-wrapper cyan accent-2">
      <a href="index.php" class="brand-logo center indigo-text text-darken-4">ToDo</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="index.php"><i class="material-icons indigo-text text-darken-4">profile</i></a></li>
        <li><a href="logout.php"><i class="material-icons indigo-text text-darken-4">logout</i></a></li>
      </ul>
    </div>
  </nav>
  <div><h2 class="truncate center"> Welcome <?php echo $_SESSION["username"];?></h2></div>
  <div><h4 class="truncate center"> Add Your Task</h4></div>

      <div class="container center"><span>
          <form action="todo.php" method="POST">
                <label class="black-text">Task Name</label><br>
                <input class="center" placeholder="username" type="text" name="taskname"><br>
                
                <label class="black-text">task</label><br>
                <input class="center" placeholder="password" type="text" name="task"><br>
                <input  class="btn" type="submit" name="submit">
                
            </form>
            </span>
        </div>
        <ul class="collapsible popout">
        <?php
             
            $sql="SELECT * FROM task where id=?";
            $id=$_SESSION["id"];
            $result=$con->prepare($sql);
            $result->execute(array($id));
            if ($result->rowcount()>0) {
              while ($row = $result->fetch(PDO::FETCH_ASSOC)){
               // print_r($row);
                echo '<li>';
                echo '<div class="collapsible-header"><i class="material-icons">task</i>'.$row["taskname"].'</div>';
                echo '<div class="collapsible-body"><span>'.$row["task"].'</span>';
                //echo '<td>'.'<form action="todo.php" method="POST"><input type="hidden" name="id" value='.$row['did'].'><input type="submit" class="btn" name="edit" value="Edit"></form>'.'</td>';
                echo '<form action="todo.php" method="POST"><input type="hidden" name="did" value="'.$row["did"].'"><input type="submit" class="btn right" name="delete" value="DELETE"></form>';
                //echo '<form action="todo.php"><button class="btn right"><i class="right material-icons">delete</i></button></form></div></li>';
              }
            }else{
              echo '<li>';
              echo '<div class="collapsible-header"><i class="material-icons">task</i>'.'no task are available'.'</div></li>';
            }
        ?>
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