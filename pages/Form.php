<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bg-dark">
    
    <div class="container mt-4">
        
        <!-- forgot password -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="index_submit" method="get" role="form" class="p-2" id="forgot-frm">
                    <div class="form-group">
                        <small class="text-muted">
                            To reset your password, enter the email adres and we will send reset password instructions on your email.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group text-center">
                        <a href="#" id="back-btn">Back</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</body>
</html>