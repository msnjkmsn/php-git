<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Styling.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;500&display=swap" rel="stylesheet">
    <style>
        #container{
            margin-top: 140px;
            color: #c4e3f3;
            background-size: cover;


        }
        #all, #done,#delete,#notepad{
            display: none;
        }
        .buttons{
            margin-bottom: 30px;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size:14px;
            line-height: 1.5em;
            border-left-width:20px ;
            border-left-color: #ea5757;
            color: #080d15;
            font-size: x-large;
            background-color: #f1d5d3;
            padding: 10px;
        }
        tr {
            padding-top: 2004px;
            cursor: pointer;
            background-color: #0f0316;
            color: #f0dbf5;
            font-size: x-large;
        }
         .modal{
             margin-top: 180px;
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
<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

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

                <li class="active"><a href="#">Profile</a></li>
                <li ><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
                <li ><a href="#">My Notes</a></li>
                <li ><a href="#">My Passwords</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li ><a href="#loginModal" >Log out</a></li>
                <li ><a href="#loginModal" >Logged in<b> username</b></a></li>



            </ul>
        </div>

    </div>
</nav>
<!--Container-->


    <div class="container" id="container">
      <div class="row">
            <div class="col-md-offset-3 col-md-6">
<h1>Account Information: </h1>
                <div class="table-responsive">
                    <table class="table table-hover table-responsive table-condensed table-bordered">
                        <tr data-target="#updateUsername" data-toggle="modal">
                            <td>Username</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updateEmail" data-toggle="modal">
                            <td>Email</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updatePassword" data-toggle="modal">
                            <td>Password</td>
                            <td>value</td>
                        </tr>
                    </table>

                </div>
</div>
</div>
</div>


<!--updateusername Form-->
<form method="post" id="updateusernameform">
    <div class="modal" id="updateUsername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        Update Username
                    </h4>
                </div>
                <div class="modal-body">
                    <!--Login message-->
                    <div id="loginmessage">

                    </div>


                    <div class="form-group">

                        <input class="form-control" type="text" name="username"  id="username"  maxlength="35" value="username value">
                    </div>

                </div>
                <div class="modal-footer">
                    <input  class="btn purple" name="updateUsername" type="submit" value="submit">
                    <button type="button" class="btn btn-default purple">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</form>


<!--updateEmail Form-->
<form method="post" id="updateEmailform">
    <div class="modal" id="updateEmail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        Update Email
                    </h4>
                </div>
                <div class="modal-body">
                    <!--Login message-->
                    <div id="loginmessage">

                    </div>


                    <div class="form-group">

                        <input class="form-control" type="text" name="updateEmail"  id="updateEmail"  maxlength="35" value="Email Address">
                    </div>

                </div>
                <div class="modal-footer">
                    <input  class="btn purple" name="updateEmail" type="submit" value="submit">
                    <button type="button" class="btn btn-default purple">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</form>


<!--updatePassword Form-->
<form method="post" id="updatePasswordform">
    <div class="modal" id="updatePassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4 id="myModalLabel">
                        Updating Password
                    </h4>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="oldpassword" class="sr-only">Old Password</label>
                        <input class="form-control" type="password" name="oldpassword"  id="email" placeholder="Current Password" maxlength="35">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">new password</label>
                        <input class="form-control" type="password" name="password"  id="password" placeholder="new Password" maxlength="35">
                    </div>

                    <div class="form-group">
                        <label for="password2" class="sr-only">Confirm password</label>
                        <input class="form-control" type="password" name="password2"  id="password2" placeholder="Confirm new password" maxlength="35">
                    </div>

                </div>
                <div class="modal-footer">
                    <input  class="btn purple" name="signup" type="submit" value="submit">


                    <button type="button" class="btn btn-default purple">
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
