<?php
 include_once '../model/categorie.php';
    include_once '../controller/categorieC.php';
$cat=new categorieC();
//$listcat=$cat->affichercateg();


//pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 3;

//echo $page;
//echo $perpage;


$listcat = $cat->AfficherproduitPaginer($page, $perpage);
$totalP = $cat->calcTotalRows($perpage);



if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listcat= $cat->recherche($search_value);
                        }
                        
?>
<!-- html -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fagito | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="afficherutilisateur.php" class="nav-link"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-phone-alt"></i> Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit" value="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
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
      <span class="brand-text font-weight-light">Fagito</span>
    </a>

    <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Harakati Zeineb</a>
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
          <li class="nav-item menu-open">
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
		    <li class="nav-item menu-open">
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
                <a href="afficher_commande.php" class="nav-link ">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mes Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mes Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
    

   
    <!-- Main content  tableau-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Afficher Categorie </h3>
              </div>
              <!-- Search -->
              <br>
              
              <!-- /.card-header -->
			  
			   <!-- Recherche-->
			  <br>
			           <div class="form-group">
                            <div class="input-group input-group-lg">
                                <!--<input type="search" class="form-control form-control-lg" placeholder="entrer votre produit" value="">
								-->

                                   <form method="get" action="afficher_categ.php"  class="mb-4">
                                   <input type="text" class="form-control" name="recherche" placeholder="categorie">
                                   <br>
                                   <input type="submit" class="btn btn-primary "  value="Chercher">
                                   <style>
							                  	  input{
                                        margin: 13px 12px 12px 10px;
                                        }
								                    </style>
                                    </form>

                            

                                
                            </div>
                        </div>
			  
			  <!-- card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
				  
                  <tr>
                    <th>Id_Categorie</th>
                    <th>Nom_Categorie</th>
                    <th>Description</th>
					<!--
                    <th> Fonctionnalités </th>
                    --> 
					
                  </tr>
                  </thead>
				  
                  <tbody>
                  
                  
				  <?php
				  foreach($listcat as $row){
				  ?>

                  <tr>
                    <td> <?php echo $row['id_categ'];?></td>
					<td> <?php echo $row['nom_categ'];?></td>
					<td> <?php echo $row['descriptionc'];?></td>
					
                     
                     <td> 
                     <form method="POST" action="supprimer_categ.php">
                                        <button type="submit"  id="supprimer"  class="btn btn-danger">supprimer</button>
                                        <input type="hidden" value=<?PHP echo $row['id_categ']; ?> name="id_categ">
                                        </form>
                                        
										<!--
                      
                                       <a class="btn btn-primary" href="modifier_categ.php?id_categ=<?PHP echo $row['id_categ']; ?>">Modifier </a>
                                     -->
									 <a class="btn btn-primary" href="MODIF_C.php?id_categ=<?PHP echo $row['id_categ']; ?>">Modifier </a>
                     </td>

                   </tr> 
                  <?PHP
				           }
		  	         ?>
                    
                  </tbody>
				  
				  <div>
				  <a class="btn btn-primary" onclick="refresh()"><i class="fas fa-undo"></i> </a>
								  <style>
								  button{
                                      margin:  13px 12px 12px 10px;
                                        }
									
								  </style>
				  
				  </div>
                  
                </table>
				<script>
				 function refresh(){
			   window.location.reload();
		                           }
				
				</script>
				
				<form method="POST" action="linechart/stat_c.php">
                                        
										<button type="submit"  id="statistique"  class="btn btn-info" href="linechart/stat_c.php"> <i class="far fa-chart-bar"></i></button>
										
                    
                                        </form>
				
				
				<?php 
				for ($x = 1; $x <= $totalP; $x++) :

?>

    <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?><style>margin:  13px 12px 12px 10px; </style> </a>

<?php endfor; ?>
				
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
