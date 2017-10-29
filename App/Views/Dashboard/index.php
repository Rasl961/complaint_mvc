<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Complaints</a>
    </div>
    <ul class="nav navbar-nav navbar navbar-right">
    <?php if($_SESSION['logged_status'] =='logged' && $_SESSION['user_status']=='moderator') 
    {
    echo '
    <ul class="nav navbar-nav">
    </form></li>
    <li><form action="/Admin/index" method="post">
    <button class="btn btn-default navbar-btn pull-right" name="admin_panel" style="margin-right:10px;">Admin panel</button>
    </form> </li>
   <li> <form action="/complaint/index" method="post">
     <button class="btn btn-info navbar-btn" name="add_complaint" style="margin-right:10px;">Add complaint</button>
         </form></li>

        <li><form action = "" method ="post">
         <button  class="btn btn-danger navbar-btn" name="logout" style="margin-right:10px;">Log out</button>
         
       
         
<ul>';

    }
    elseif($_SESSION['logged_status'] =='logged') {
      echo '
      <ul class="nav navbar-nav">
      <li><a href="">Welcome,<span style="color:red;">'.$_SESSION["user_name"].'</span></a><li>
     </ul>';
      echo '
      <ul class="nav navbar-nav">
     <li> <form action="/complaint/index" method="post">
       <button class="btn btn-info navbar-btn" name="add_complaint" style="margin-right:10px;">Add complaint</button>
           </form></li>
  
          <li><form action = "" method ="post">
           <button  class="btn btn-danger navbar-btn" name="logout" style="margin-right:10px;">Log out</button>
           
           </form></li>
           </ul>';
    }

    else {
      echo '
      <ul class="nav navbar-nav navbar-right">
      <li><a href="/register/index"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/Auth/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>';
    }

    // if(isset($_SESSION['user_status']) == 'moderator') {
    //   echo '<form action="/Admin/index" method="post">
    //   <li class="btn btn-default navbar-btn pull-right" name="admin_panel" style="margin-right:5px;">Admin panel</li>
    //   </form>'; 
    // }

      ?>
    </ul>

    <?php
    if(isset($_POST['logout'])){
      $_SESSION['user_status'] =' ';
      session_destroy();
      session_unset();
      header("Location:/");
      exit;
    }
    
    ?>
   
    <?php
      // if(isset($_SESSION['user_status']) == 'moderator') {
      //   echo '
        
      //   <li><form action="/Admin/index" method="post">
      //   <button class="btn btn-default navbar-btn pull-right" name="admin_panel" style="margin-right:5px;">Admin panel</button>
      //   </form> </li>';
        
      // }
    ?>

  </div>
</nav>

<div class="container">
<?php
foreach ($complaints as $complaint):?>
  <div class="well" style="margin-top:3%;">

      <div class="media">
    
  		<div class="media-body">
    		<h4 class="media-heading"  style="color:lightblue;"><? echo $complaint['complaint_title'];?></h4>
          <p class="text-right">Posted by: <span style="color:red;"><?echo $complaint['posted_by'];?></span></p>
          <p><?echo $complaint['complaint_description'];?></p>
          <ul class="list-inline list-unstyled">
  			<li><span  style="color:blue;"><i class="glyphicon glyphicon-calendar"></i><?echo $complaint['post_date'];?></span></li>
           
            </li>
			</ul>
    
       </div>
     
    </div>

  </div>
  <?php endforeach; ?>
</div>
   
</body>
</html>
 