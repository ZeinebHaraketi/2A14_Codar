<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> CODAR Admin </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/ico" />

<script src="sweetalert2.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/ico" />

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span> CODAR TEAM </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">

         <!--   <img src="images/photo.jpg" alt="..." class="img-circle profile_img">   -->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
                <img src="images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" width="10%" height="10%">
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu 
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Les Gestions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="gestionEvents.php">Gestion des events</a></li>
                      <li><a href="gestionblogs.php">Gestion des Blogs </a></li>
                      <li><a href="gestionContact.php">Gestion des Contacts </a></li>
                      <li><a href="gestionParticipants.php">Gestion des Participants </a></li>
                    </ul>
                  </li> 
                </ul>
              </div>

              
      -->


      <!--
      <div class="form-group">
                                    <label for="nom">nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $user['nom']; ?>">
                                </div>
            </div>
-->




            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Look" href="../index.php">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
  <!--
        <!-- top navigation 
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <!--        <img src="images/photo.jpg" alt="">Kridane Saif -->
          <!--           </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Gestion des Blogs </h3>
              </div>
            <form method="GET" action="gestionBlogs.php">

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search for...">
                   
                      <input class="btn btn-secondary" type="submit" value="Go!"></input>
                   
                  </div>
                </div>
              </div>
            </form>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tableau de Blogs </h2>
                   
                      <li class="dropdown">
                 
                 

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        </div>
                      </li>
                      


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                        <div class="row">
                                           

                    <!-- start project list -->
                    <table id="datatable" class="table table-striped table-bordered" style="width:80%">
                      <thead>
                        <tr>
                        <br>
                          <th>Titre</th>
                          <th>descrip</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         require_once"connexion.php";
                        $conn=se_connecter();
                        $query="select * from blog order by TitreB";
                        


                        if(isset($_GET['search']) AND !empty($_GET['search']))
                        {
                          $search = htmlspecialchars($_GET['search']);
                          $query="select * from blog where TitreB like '%".$search."%' order by idB DESC " ;

                        }
                        $result=$conn->query($query);
                        $data=$result->fetchAll();
                        for($i =0;$i<count($data);$i++)
                        {

                          $idB=$data[$i]["idB"]; 
                          $TitreB=$data[$i]["TitreB"];
                          $DescriptionB=$data[$i]["DescriptionB"];
                          $ImageB=$data[$i]["ImageB"];
                          
                           


                        
                          echo "<tr>";
                      
                
                      echo"<td>".$TitreB."</td>";
                      echo"<td>".$DescriptionB."</td>";
                     echo"<td><img src=".$ImageB." alt='img' width='50' height='50'></td>";
                      
                     echo"<td>";
                   
          
                     echo '<form action="supprimBlog.php" method="POST"> 
                       <input type="hidden" name="idB" value="'.$idB.'" />
                     <button type="submit" name="c"  class="btn btn-danger btn-xs">
                     <i class="fa fa-trash-o"></i></button></form>';
                      echo"</td>";

                      echo"</tr>";

                      echo "<td>" ;
                     echo"<a href='modifierBlog.php?idB=".$idB."' class='btn btn-info btn-xs'> <i class='fa fa-pencil' > </i> </a>";
                    
                      echo "</td>" ;
                 }  
             ?>    



                      </tbody>
                    </table>
                  
                  <a href="AjouterBlog.php" type="button" class="btn btn-info btn-xs" ><i class="fa fa-bars"> Ajouter </i></a>
                  <br>
                  <a href="/CRUD/Zarga/back/afficher_blog.php" type="button" class="btn btn-info btn-xs" ><i class="fa fa-bars"> Page De Modification  </i></a>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  



    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>