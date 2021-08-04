<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user login and registration</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6" login-left>
                <h2>login here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>



                </form>
            </div>


                    <div class="col-md-6" login-right>
                        <h2>Register here</h2>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>



                        </form>
                    </div>


        </div>


            </div>







    </div>
</body>
</html>
