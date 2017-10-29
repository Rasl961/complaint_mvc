 
<!DOCTYPE HTML>
<html>
    <head>
        <title>Post add panel</title>
         
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified JavaScript -->
        
        <script   src="https://code.jquery.com/jquery-3.2.1.js"   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="   crossorigin="anonymous"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
        <a href="/dashboard/index" style="margin-left: 3%; margin-top: 3%; display: block;">back</a>
        <div class="container" style="background-color: rgba(245, 244, 244, 0.59);margin-top: 5%;">
    
            <div class="row">
            
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Add a complaint</h1>
    		
                <form action="" method="post">
    		  
                <div class="form-group">
                <label for="complaint_title">Title <span class="require">*</span> </label>
                <input type="text" class="form-control" name="complaint_title" required />
            </div>
                    <div class="form-group">
                        <label for="user_email"> Email <span class="require">*</span></label>
                        <input type="text" class="form-control" name="user_email" required />
                    </div>
                    <div class="form-group">
                        <label for="user_website"> Web site</label>
                        <input type="text" class="form-control" name="user_website" required />
                    </div>
                   

    		    <div class="form-group">
    		        <label for="complaint_description">Description</label>
                        <textarea rows="5" class="form-control" name="complaint_description" required></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>

    		    <div class="form-group">
                        
      <button  class="btn btn-danger btn-lg" name='addcomplaint'>Add Complaint</button>
                   
                        
                
    		    </div>
    		    
    		</form>
                

		</div>
		
	</div>
</div>
    </body>
</html>
