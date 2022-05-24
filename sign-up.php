<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> CRUD CAT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 ">
        <fieldset>
            <legend>Register</legend>
             <form action="action.php" method="POST">
                <div class="col-6">
                    <label class="form-label">Your First Name</label>
                    <input type="text" name="first" class="form-control" required>
                    
                </div>

                <div class="col-6">
                    <label class="form-label">Your last name</label>
                    <input type="text" name="last" class="form-control"  required>
                    
                </div>

                <div class="col-6">
                    <label class="form-label">Your Email</label>
                    <div class="input-group has-validation">
                    <input type="text" name="email" class="form-control"required>
                    
                    </div>
                </div> 

                <div class="col-6">
                    <label  class="form-label">Phone number</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="col-6">
                    <label class="form-label">location</label>
                    <input type="location" name="location" class="form-control" required>
                </div>
               
                    <div class="mb-3 mt-4">
                    <button type="submit" name="register" class="btn btn-primary">Create account</button>
                    </div>
                <div class="col-6">
                    <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
        
                </div>
        </form>

        </fieldset>
       
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>