<?php session_start(); ?>
<nav class=" nim-menu navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">C<span class="themecolor">R</span>ypto Tech</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="page-scroll">
                        <h3>Home</h3>
                    </a></li>
                <li><a href="product.php">
                        <h3>Products</h3>
                    </a></li>
                <li><a href="services.php" class="page-scroll">
                        <h3>Services</h3>
                    </a></li>
                <?php
                    if(!isset($_SESSION['client'])){
                        print "
                        <li><a href='signin.php'>
                            <h3>Login</h3>
                        </a></li>
                        ";
                    }
                    ?>
                <li><a href="#two" class="page-scroll">
                        <h3>About</h3>
                    </a></li>
                <?php 
                if(isset($_SESSION['client'])){ 
                     echo "
                <li><a href='backend/logout.php' class='page-scroll'>
                        <h3>Sign Out</h3>
                    </a>
                </li>
                ";
                 } ?>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>

</nav>