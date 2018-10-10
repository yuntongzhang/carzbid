<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel = "stylesheet" type = "text/css" href = "http://localhost:8080/assets/bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "http://localhost:8080/assets/fonts/ionicons.min.css">
    <link rel = "stylesheet" type = "text/css" href = "http://localhost:8080/assets/css/styles.min.css">
</head>

<body>
    <div class="login-dark">
        <?php echo form_open('User_controller/verify_user'); ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="passwd" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script type = 'text/javascript' src = "http://localhost:8080/assets/js/jquery.min.js"></script>
    <script type = 'text/javascript' src = "http://localhost:8080/assets/bootstrap/js/bootstrap.min.js"></script> 
</body>

</html>
