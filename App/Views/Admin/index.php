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
<div class="container-fluid" id="cont" style="margin-top: 2%;">
    <a href="/dashboard/index">back</a>
    <h3 class="text-center"><?php echo 'Admin Panel'?></h3> 
 
    <div class="panel" style="background-color: rgba(245, 244, 244, 0.59); margin-top: 30px;">
             <h4 class="text-center"><?php echo 'User list'?></h4> 

                    <!--user list-->
        <table  class ="table" border="1" style="text-align: center; width: 100%;">
                    <thead>
                        <tr class="success">
                            
                            <th style="text-align: center"><h4>Complaint title</h4></th>
                            <th style="text-align: center"><h4>Complaint description</h4></th>
                            <th style="text-align: center"><h4>Posted by</h4></th>
                            <th style="text-align: center"><h4>User email</h4></th>
                            <th style="text-align: center"><h4>User website</h4></th>
                            <th style="text-align: center"><h4>Post date</h4></th>
                            <th style="text-align: center"><h4>Delete</h4></th>
 
                        </tr>
                    </thead>
                     
                    <tbody>
                              <?php foreach($complaints as $complaint):?>
                        <tr class="info">
                            <td><?php echo $complaint['complaint_title']?></td>
                            <td><?php echo $complaint['complaint_description']?></td>
                            <td><?php echo $complaint['posted_by']?></td>
                            <td><?php echo $complaint['user_email']?></td>
                            <td><?php echo $complaint['user_website']?></td>
                            <td><?php echo $complaint['post_date']?></td>
                            <form method="POST">
                            <td><button class="btn btn-danger" name="delete_complaint" value="<?php echo $complaint['id']?>"  style="width:100%; ">Delete</button></td>
                           
                             
                            </form>
                        </tr>
                        
                            <?php endforeach;?>
                    </tbody>
                       
                </table>
                    </div>
                </div>




</body>
</html>