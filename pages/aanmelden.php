<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</head>
<body class="bg-dark">
    
    <div class="container mt-4">
        
        <!-- Registration form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" enctype="multipart/form-data" role="form" class="p-2" id="register-form">
                    <div class="form-group">
                        <input type="text" name="Voornaam" class="form-control" placeholder="Voornaam" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Achternaam" class="form-control" placeholder="Achternaam" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Adres" class="form-control" placeholder="Adres" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Postcode" class="form-control" placeholder="Postcode" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Woonplaats" class="form-control" placeholder="Woonplaats" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="Password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rem" class="custom-control-input" id="customCheck2">
                            <label for="customCheck2" class="custom-control-label">I agree to the <a href="#">terms & conditions.</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="register" value="Register" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">Already Registered? <a href="#" id="login-btn">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    
</body>
</html>