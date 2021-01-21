<!-- Navigation Bar-->
<?php
ob_start ();
session_start ();
$user_id=$_SESSION['user_id'];
//include "../includes/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>NATIONAL STOCK EXCHANGE
</title>

        <!--Morris Chart CSS -->
		

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>
    <?php
   

if($user_id=="")
{
    header("location:login.php");
    exit;

}



?>
<header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                        NATIONAL STOCK EXCHANGE
                        </a>
                        <h6>Beta Version</h6>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        
                            <li class="navbar-c-items">
                               
                                     
                                
                                
                            </li>

                            
                            

                            
                        </ul>
                        
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->

                            <ul class="navigation-menu">

                            
                            

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-home-map-marker"></i>Company Details</a>
                                <ul class="submenu">
                                    <li><a href="company.php">Company Details</a></li>
                                    <li><a href="company_data.php">Company Data</a></li>
                                    <li><a href="company_data_view.php">Company Data View</a></li>
                                   
                                  
                                   
                                </ul>
                                
                            </li>

                            <li class="has-submenu">
                                <a href="logout.php"><i class="mdi mdi-home-map-marker"></i>Log Out</a>
                               
                                
                            </li>
                            

                        </ul>

                        


                        
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <body>