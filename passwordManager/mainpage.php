<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>linkedData</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Styling.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;500&display=swap" rel="stylesheet">
<style>
    .modal{
        margin-top: 200px;
    }
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Navigation bar-->
<nav role="navigation"   class="navbar navbar-custom navbar-fixed-top">

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">linkedData</a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>


            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Home</a></li>
                <li ><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li ><a href="#loginModal" data-toggle="modal">Log in</a></li>

            </ul>
        </div>

    </div>
</nav>
<!--Jumbotron with Sign Up button-->
<div class="jumbotron" id="myContainer">
    <h1 >online password manager & diary</h1>
    <P class="text" style="font-size:xx-large">Organize & protect your passwords and notes online</P>
    <p class="text"style="font-size:xx-large" >Access whenever your want!</p>
    <button type="button" class="btn btn-lg  navbar-custom signup" data-target="#signupModal" data-toggle="modal">Sign up</button>
</div>


<!--Login Form-->
<form method="post" id="loginform">
    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        Log in
                    </h4>
                </div>
                <div class="modal-body">
                    <!--Login message-->
                    <div id="loginmessage">

                    </div>


                    <div class="form-group">
                        <label for="loginemail" class="sr-only">Email Address</label>
                        <input class="form-control" type="email" name="loginemail"  id="loginemail" placeholder="Email Address" maxlength="35">
                    </div>
                    <div class="form-group">
                        <label for="loginpassword" class="sr-only">Type your password</label>
                        <input class="form-control" type="password" name="loginpassword"  id="loginpassword" placeholder="Password" maxlength="35">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="rememberme" id="rememberme">
                            Remember me
                        </label>

                        <a class="pull-right" style="cursor: pointer" data-target="#forgotpasswordModal" data-toggle="modal">
                            Forgot password
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <input  class="btn purple" name="login" type="submit" value="Log in">
                    <button type="button" class="btn purple pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal" >
                        Register
                    </button>

                    <button type="button" class="btn purple">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<!--Sign Up Form-->
<form method="post" id="signupform">
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        Sign up for free!
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input class="form-control" type="text" name="username"  id="username" placeholder="Username" maxlength="35">
                    </div>

                    <div class="form-group">
                        <label for="email" class="sr-only">Email Address</label>
                        <input class="form-control" type="email" name="email"  id="email" placeholder="Email Address" maxlength="35">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Type your password</label>
                        <input class="form-control" type="password" name="password"  id="password" placeholder="Password" maxlength="35">
                    </div>

                    <div class="form-group">
                        <label for="password2" class="sr-only">Confirm password</label>
                        <input class="form-control" type="password" name="password2"  id="password2" placeholder="Confirm password" maxlength="35">
                    </div>

                </div>
                <div class="modal-footer">
                    <input  class="btn purple" name="signup" type="submit" value="Sign up">


                    <button  type="button" class="btn  purple">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<!--Forgot Password Form-->
<form method="post" id="forgotpasswordform">
    <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        type the email that is registered with
                    </h4>
                </div>
                <div class="modal-body">

                    <!--Forgot Password from php-->
                    <div id="forgotpasswordmessage">

                    </div>

                    <div class="form-group">
                        <label for="recoveremail" class="sr-only">Email Address</label>
                        <input class="form-control" type="email" name="recoveremail"  id="recoveremail" placeholder="Email Address" maxlength="35">
                    </div>


                </div>

                <div class="modal-footer">
                    <input  class="btn purple" name="forgotpassword" type="submit" value="submit">

                    <button type="button" class="btn purple pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal" >
                        Register
                    </button>

                    <button type="button" class="btn purple">
                        Cancel
                    </button>

                </div>
            </div>
        </div>
    </div>
</form>

<!--Footer-->
<div class="footer">
    <div class="container">
        <p>Software Testing Website &copy;<?php $today = date("Y");echo $today?></p>
    </div></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
