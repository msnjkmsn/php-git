<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>passwords</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Styling.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;500&display=swap" rel="stylesheet">
    <style>
       #container{
            margin-top: 130px;
            position: center;

        }
        #all, #done,#delete,#passwords{
            display: none;
        }
        .buttons{
            margin-bottom: 30px;
            position: relative;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size:14px;
            line-height: 1.5em;
            border-left-width:20px ;
            border-left-color: #ea5757;
            color: #0c111a;
            font-size: x-large;
            background-color: #f1d5d3;
            padding: 10px;
        }
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

                <li ><a href="#">Profile</a></li>
                <li ><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">My Notes</a></li>
                <li class="active"><a href="#">My Passwords</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li ><a href="#" >Log out</a></li>
                <li ><a href="#loginModal" >Logged in<b> username</b></a></li>



            </ul>
        </div>

    </div>
</nav>
<!--container-->
<div class="container" id="container">

    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            <div class="buttons">
                <button id="add"  type="button" class="btn-lg purple" data-target="#passwordModal" data-toggle="modal">Add Password</button>
                <button id="edit" type="button" class="btn-lg purple pull-right">Edit</button>
                <button id="done" type="button" class="btn-lg purple pull-right">Done</button>
                <button id="delete" type="button" class="btn-lg purple">Delete</button>
                <button id="all" type="button" class="btn-lg purple" >All Passwords</button>
            </div>

            <div id="passwords">


            </div>
            <div class="passwords" id="passwords">
                <!--Ajax call to php-->

            </div>


        </div>
    </div>

    <!--password-->
    <form method="post" id="passwordform"  >
        <div class="modal" id="passwordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Add your new password
                        </h4>
                    </div>
                    <div class="modal-body">



                    <div class="form-group">
                        <label for="email" class="sr-only">Email Address</label>
                        <input class="form-control" type="email" name="email"  id="email" placeholder="Email Address" maxlength="35">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Type your password</label>
                        <input class="form-control" type="password" name="password"  id="password" placeholder="Password" maxlength="35">
                    </div>
                    <div class="modal-footer">
                        <input  class="btn purple" name="signup" type="submit" value="Add">


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
