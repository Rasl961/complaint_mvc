<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
<a href="/">back</a>
  <div class="row">
    <div class="Absolute-Center is-Responsive">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
	  <div class="text-center"><h3>Sign in</h3></div>
        <form action="" id="loginForm" method='post'>
          <div class="form-group input-group">
            
            <input class="form-control" type="text" name='username' placeholder="username"/>          
          </div>
	
          <div class="form-group input-group">
            <input class="form-control" type="password" name='password' placeholder="password"/>     
          </div>
         
          <div class="form-group">
            <button type="submit" class="btn btn-info btn-block" name='submit'>Sign in</button>
          </div>

		  <p class="text-center"><a href="../register/index">Registration</a></p>
        </form>        
      </div>  
    </div>    
  </div>
</div>

<style>

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 400px;
  padding: 40px;
}
</style>
