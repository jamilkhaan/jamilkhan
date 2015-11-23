<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login </title>
        <link rel="stylesheet" href="../contents/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../contents/assets/css/login.css" />
    </head>
    <body class="login-screen">
        <div class="container login-container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default panel-login">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                Login
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login.php" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 label label-warning control-label text-uppercase">UserName:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="uname" placeholder="Enter Your Username" class="from-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 label label-warning control-label text-uppercase">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="upass" placeholder="Enter Your Password" class="from-control" />
                                    </div>
                                </div>
                                <input type="submit" name="ulogin" value="Login" class="btn btn-warning btn-sm btn-block" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript -->
        <script type="text/javascript" src="../contents/assets/plugins/jquery.js"></script>
        <script type="text/javascript" src="../contents/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
