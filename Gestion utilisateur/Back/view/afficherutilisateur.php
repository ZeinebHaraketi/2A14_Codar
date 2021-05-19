<?php
    include_once '../model/utilisateur.php';
    include_once '../controller/utilisateurC.php';

    $error = "";
     
  

    // create user
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurC = new utilisateurC();
    if (
        isset($_POST["nomutilisateur"]) && 
        isset($_POST["prenomutilisateur"]) &&
		isset($_POST["eadresseutilisateur"]) && 
		isset($_POST["dateutilisateur"]) && 
		isset($_POST["loginutilisateur"]) && 
        isset($_POST["mdputilisateur"])
       
        
    ) {
        if (
            !empty($_POST["nomutilisateur"]) && 
            !empty($_POST["prenomutilisateur"]) && 
			!empty($_POST["eadresseutilisateur"]) && 
			!empty($_POST["dateutilisateur"]) && 
			!empty($_POST["loginutilisateur"]) && 
            !empty($_POST["mdputilisateur"]) 
           
         ){
      
            
            $utilisateur = new utilisateur(
                $_POST['nomutilisateur'],
                $_POST['prenomutilisateur'], 
				$_POST['eadresseutilisateur'],
				$_POST['dateutilisateur'],
				$_POST['loginutilisateur'],
                $_POST['mdputilisateur']
                );
            $utilisateurC->ajouterutilisateur($utilisateur);
            header('Location:ajouterutilisateur.php');

      }
        else
            $error = "Missing information";
    } 

    $listeutilisateur=$utilisateurC->afficherutilisateur();
	
	
	
 ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fagito | Dashboard</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="afficherutilisateur.php" class="nav-link">Accueil</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Khardeni Achref</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficherutilisateur.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion utilisateur</p>
                </a>
              </li>
            </ul>
          </li>
		    <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>  
              <p>
                Produit/Categorie
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficher_produit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Afficher produit</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="ajouter_produit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter produit</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="afficher_categ.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher categorie</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="ajouter_categ.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter categorie</p>
                </a>
              </li> 
			  
            </ul>
          </li> 
		     <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>  
              <p>
                Carte/Offre
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficher_carte.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Afficher carte</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="afficher_offre.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher offre</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="ajouter_offre.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter offre</p>
                </a>
              </li>
			
			  
            </ul>
          </li>
		   </li> 
		     <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>  
              <p>
                Reservation/Resto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficher_resto.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Afficher resto</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="ajouter_resto.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter resto</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="afficher-reser.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher Reservation</p>
                </a>
              </li>
            </ul>
          </li>
		       <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>  
              <p>
                Commande/Livraison
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficher_commande.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Afficher commande</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="ajouter_commande.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter commande</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="ajouter_livraison.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter livraison</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="afficher_livraison.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher livraison</p>
                </a>
              </li>
            </ul>
          </li>
		    <li class="nav-item menu-closed">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>  
              <p>
                Blog/Commentaire
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="afficher_blog.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Afficher blog</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="Admin/AjouterBlog.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter blog</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="afficher_commentaire.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afficher commentaire</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="ajouter_commentaire.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter commentaire</p>
                </a>
              </li> 
			  
            </ul>
          </li>
          
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
			</li>
            </ul>
			
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Utilisateur</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Gestion Utilisateur</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des utilisateurs</h4>
                  
                  <div class="table-responsive pt-3" >
				  
                    <!--PDF-->
					<a  href="export.php"class="btn btn-warning" >Exporter les données</a>
					<br>
					<hr>
                  
                    <table class="table table-bordered">
                      <thead>
                        <tr>
						<th>
							Id utilisateur
                          </th>
                          <th>
							Nom 
                          </th>
                          <th>
						    Prenom
                          </th>
                          <th>
							Adresse 
                          </th>
                          <th>
                            Date de naissance
                          </th>
						  <th>
							Login 
                          </th>
						  
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          foreach($listeutilisateur as $utilisateur){
                            ?>

                          
              
                        <tr>
                            <td><?PHP echo $utilisateur['idutilisateur']; ?></td>
                            <td><?PHP echo $utilisateur['nomutilisateur']; ?></td>
                            <td><?PHP echo $utilisateur['prenomutilisateur']; ?></td>
                            <td><?PHP echo $utilisateur['eadresseutilisateur']; ?></td>
							<td><?PHP echo $utilisateur['dateutilisateur']; ?></td>
							<td><?PHP echo $utilisateur['loginutilisateur']; ?></td>
													
                            <td>
                                      <form method="POST" action="supprimerutilisateur.php">
                                      <input class="btn btn-primary mr-2" type="submit" name="supprimer" value="supprimer">
                                      <input type="hidden" value=<?PHP echo $utilisateur['idutilisateur'];?>  name="idutilisateur"> 
                                      </form>
                            </td>
                            <td>
                                <a class="btn btn-light" href="modifierutilisateur.php?idutilisateur=<?PHP echo $utilisateur['idutilisateur']; ?>"> Modifier </a>
                            </td>
                          
                        </tr>
                        <?PHP
                          }
                        ?>
                      </tbody>
					  				
	   
                    </table>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  
  
  <footer class="main-footer">
   
   <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Fagito.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>