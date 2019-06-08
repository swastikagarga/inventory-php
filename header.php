<?php
session_start();
$sesid=$_SESSION['userid'];
$sesusertype=$_SESSION['usertypes'];
if(!isset($sesid))
{
header('location:index.php');
}

?>
<?php 
    include('conn.php'); 
    $select_activity = "select * from activity limit 3";
    $all_activity = mysqli_query($conn, $select_activity);
    $rs=mysqli_query($conn, "select * from users where userid='$sesid' ");

    $select_notify = "select * from notification where whom_to_notify='$sesusertype' order by id desc limit 3 ";
    $all_notify = mysqli_query($conn, $select_notify);
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="test.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


    <script>
        function showResult(str) {
        if (str.length==0) { 
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
        }
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="#">
                            <img src="images/icon/apdcllogo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="show.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <?php
                                        if($sesusertype==1){
                                            echo '<li>
                                            <a href="user.php">
                                                    <i class="fas fa-user"></i>Users</a>
                                            </li>';
                                           echo  '<li>
                                                <a href="adition.php">
                                                        <i class="fas fa-plus"></i>Add</a>
                                                </li>';  
                                        }
                                    ?>
                        
                          
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Materials</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <?php
                                        if($sesusertype==1){
                                            echo '<li>
                                                <a href="addmaterial.php">Add Materials </a>
                                            </li>';
                                            echo '<li>
                                            <a href="addstock.php">Add stock </a>
                                        </li>';
                                        }
                                    ?>
                                    
                                    <li>
                                        <a href="issue.php">Issue </a>
                                    </li>
                                    
                                </ul>
                       </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tables</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="materials.php">Materials </a>
                                    </li>
                                    <li>
                                        <a href="stocks.php">Stocks</a>
                                    </li>
                                    <li>
                                        <a href="issuetable.php">Issued </a>
                                    </li>
                                    <li>
                                        <a href="damagetable.php">Damage</a>
                                    </li>
                                    <?php if($sesusertype==1){
                                     echo '<li>
                                        <a href="usertable.php">Users</a>
                                    </li>';}?>
                                </ul>
                                <hr>
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="contactdeveloper.php">
                             <i class="fas fa-handshake-o"></i>Contact Developers</a>
                    </li>
                    <li class="has-sub">
                            <a class="js-arrow" href="aboutus.php">
                             <i class="fas fa-cloud"></i>About us</a>
                    </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/apdcllogo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="show.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <?php
                                        if($sesusertype==1){
                                            echo '<li>
                                            <a href="user.php">
                                                    <i class="fas fa-user"></i>Users</a>
                                            </li>';
                                           echo  '<li>
                                                <a href="adition.php">
                                                        <i class="fas fa-plus"></i>Add</a>
                                                </li>';  
                                        }
                                    ?>
                        
                          
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Materials</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <?php
                                        if($sesusertype==1){
                                            echo '<li>
                                                <a href="addmaterial.php">Add Materials </a>
                                            </li>';
                                            echo '<li>
                                            <a href="addstock.php">Add stock </a>
                                        </li>';
                                        echo '<li>
                                            <a href="approval.php">Issue approve </a>
                                        </li>';
                                        }
                                    ?>
                                    
                                    <li>
                                        <a href="issue.php">Issue </a>
                                    </li>
                                    
                                </ul>
                       </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tables</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="materials.php">Materials </a>
                                    </li>
                                    <li>
                                        <a href="stocks.php">Stocks</a>
                                    </li>
                                    <li>
                                        <a href="issuetable.php">Issued </a>
                                    </li>
                                    <li>
                                        <a href="damagetable.php">Damage</a>
                                    </li>
                                    <?php 
                                    if($sesusertype==1){
                                     echo '<li>
                                        <a href="usertable.php">Users</a>
                                    </li>'; }?>
                                </ul>
                        </li>
                    </ul>
                    
                    <hr>
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="contactdeveloper.php">
                             <i class="fas fa-handshake-o"></i>Contact Developers</a>
                    </li>
                    <li class="has-sub">
                            <a class="js-arrow" href="aboutus.php">
                             <i class="fas fa-cloud"></i>About us</a>
                    </li>

                                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input " type="text" onkeyup="showResult(this.value)" name="search" placeholder="Search for datas &amp; reports..." />
                                
                                
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have  news message</p>
                                            </div>

                                            <?php

                                            while($row = mysqli_fetch_array($all_activity)){
                                                ?>
                                                <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="#" />
                                                </div>
                                                <div class="content">
                                                    <h6><?php echo $row['userid']; ?></h6>
                                                    <p><?php echo $row['description']; ?></p>
                                                    <span class="time"><?php echo $row['time']; ?></span>
                                                </div>
                                            </div>
                                                
                                                <?php

                                            }

                                            ?>
                                            <div class="mess__footer">
                                                <a href="query.php">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            
                                            <?php

                                                    while($row = mysqli_fetch_array($all_notify)){
                                                        ?>
                                                        <div class="notifi__item">
                                                        <div class="bg-c2 img-cir img-40">
                                                             <i class="zmdi zmdi-account-box"></i>
                                                        </div>
                                                        <div class="content">
                                                            <h6><?php echo $row['usend']; ?></h6>
                                                            <p><?php echo $row['description']; ?></p>
                                                            
                                                        </div>
                                                    </div>
                                                        
                                                        <?php

                                                    }

                                                    ?>
                                            
                                            
                                            
                                            <div class="notifi__footer">
                                                <a href="notify.php">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <?php

                                        while($row1 = mysqli_fetch_array($rs)){
                                      ?>
                                            <img src="<?php echo $row1['userpic'] ?>" alt="<?php echo $row1['username']?>" />
                                        </div>
                                        <div class="content">
                                            
                                      <a class="js-acc-btn" href="#">  <?php echo $row1['firstname']?> <?php echo $row1['lastname']  ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo $row1['userpic'] ?>" alt="<?php echo $row1['username']?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['username']; ?></a>
                                                    </h5>
                                                    <span class="email"> <?php echo $row1['email'] ?></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="account.php">
                                                        <i class="zmdi zmdi-account animated infinite wobble zmdi-hc-fw"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="systemsetting.php">
                                                        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
            <div id="livesearch"></div>
            
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
       
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
