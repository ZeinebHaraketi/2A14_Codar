<?php
include "../Controller/categorieC.php";
include_once '../Model/categorie.php';



$error = "";

$catC=new categorieC();

if (
    
    isset($_POST["nom_categ"]) && 
    isset($_POST["descriptionc"]) 
   )
{
    if (
        
        !empty($_POST["nom_categ"]) && 
        !empty($_POST["descriptionc"])
        )
    {
            $cat = new categorie
            (
                $_POST['nom_categ'],
                $_POST['descriptionc']
            );
            $catC->modifiercategorie($cat, $_GET['id_categ']);
            //header('Location:../View/afficher_categ.php');
            header('refresh:5;url=afficher_categ.php');

    }
    else 
    $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Gestion des Categories</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../View/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../View/assets/dist/css/adminlte.min.css">
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
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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

              
                <button class="btn btn-navbar" type="submit"  value="submit" onclick="test()">
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
    <a href="../View/assets/index.html" class="brand-link">
      <img src="../View/assets/dist/img/LOGO.png" alt="Logo Fagito" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fagito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../View/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Zeineb Haraketi </a>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PlateForme Generale
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../View/assets/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ma PlateForme</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistiques 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="../View/linechart/stat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Statistiques Produit </p>
                </a>
              </li>
			
			
              <li class="nav-item">
                <a href="../View/linechart/stat_c.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Statistiques Categorie </p>
                </a>
              </li>
              
            </ul>
          </li>
		  
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mon Travail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			   <li class="nav-item">
                <a href="../View/ajouter_produit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter Produit</p>
                </a>
              </li>
			
			
              <li class="nav-item">
                <a href="../View/ajouter_categ.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                   
                  <p>Ajouter Categorie</p>
                </a>
              </li>
          
             

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
              
              
                <a href="../View/afficher_categ.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion Categorie</p>

                </a>
            
              </li>
              
            </ul>
			<ul class="nav nav-treeview">
              
              <li class="nav-item">
              
              
                <a href="../View/afficher_produit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion Produit</p>

                </a>
            
              </li>
              
            </ul>
          </li>
          
		 
              
              
              <!--
              
            </ul>
          </li>
		  
          -->
          
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
            <h1>Gestion des Categories </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestion des Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier Categorie</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  
			   <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['id_categ'])) {
                    $cat = $catC->recuperercategorie($_GET['id_categ']); 
                ?>
			  
              <form action="" method="POST">
			  
			    <!-- Nom Categorie-->
                <div class="card-body">
                   
				   <div class="form-group">
                                    <label for="id_categ">id_categ</label>
                                    <input type="int" class="form-control" name="id_categ" id="id_categ" value="<?php echo $cat['id_categ']; ?>" disabled>
                                </div>
				
                  <div class="form-group">
                                    <label for="$nom_categ">$nom_categ</label>
                                    <input type="string" class="form-control" name="nom_categ" id="nom_categ" value="<?php echo $cat['nom_categ']; ?>">
                                </div>
                                  
				  
				  <!-- Description-->
				    <div class="form-group">
                                    <label for="categorie">descriptionc</label>
                                    <input type="string" class="form-control" name="descriptionc" id="descriptionc" value="<?php echo $cat['descriptionc']; ?>">
                                </div>
				  
				  
                 <button type="submit" value="submit" class="btn btn-primary">Modifier</button>
				 <button type="reset" value="reset" class="btn btn-danger">Annuler</button>
                <!-- /.card-body -->
                </div>
                
				
				
              </form>
			  
            </div>
            <!-- /.card -->


            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>

   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../View/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../View/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../View/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../View/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../View/assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
 <?php
} 
else {
            echo "error de chargement";
        }
?>
</body>
</html>

