<?php
//include "../controller/produitC.php";
include_once '../../controller/produitC.php';
//include "../Model/categorie.php";
include_once '../../Model/categorie.php';

$produit=new produitC();
//$produitC = new produitC();
//$listeproduit=$produit->afficherproduit();

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 4;

//echo $page;
//echo $perpage;


$listeproduit = $produit->AfficherproduitPaginer($page, $perpage);
$totalP = $produit->calcTotalRows($perpage);

if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listeproduit= $produit->recherche($search_value);
                        }
  /* 
$image = "path/to/original/image.jpg";
echo $image;

header('Content-disposition: attachment; filename=herzog.jpg');
header('Content-type: image/jpeg');
readfile($image);
*/

?>

<!-- html -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="30">
  <title>Fagito </title>


   
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../View/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../View/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../View/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../View/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../View/assets/dist/css/adminlte.min.css">
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
        <a href="../index.html" class="nav-link"><i class="fas fa-home"></i> Home</a>
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
    <a href="../../View/assets/index.html" class="brand-link">
      <img src="../../View/assets/dist/img/LOGO.png" alt="Logo Fagito" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fagito</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../View/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Zeineb Haraketi</a>
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
                Plateforme Generale
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../View/assets/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ma Plateforme</p>
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
                <a  href="../../View/Back/linechart/stat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistique Produit </p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a  href="../../View/Back/linechart/stat_c.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistique Categorie </p>
                </a>
              </li>
              
            </ul>
          </li>
		  
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mon Travail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Ajout Produit-->
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../../View/Back/ajouter_produit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Produit</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="../../View/Back/ajouter_categ.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Categorie</p>
                </a>
              </li>
              
            </ul>
            
          </li>
		  
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../../View/Back/afficher_produit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion Produit</p>
                </a>
              </li>
			  
			  
			  <li class="nav-item">
                <a href="../../View/Back/afficher_categ.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion Categorie</p>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-tv"></i> Afficher Produit </h3>
              </div>
              <!-- /.card-header -->
			  
			  <!-- Recherche-->
			  <br>
			           <div class="form-group">
                            <div class="input-group input-group-lg">
                                <!--<input type="search" class="form-control form-control-lg" placeholder="entrer votre produit" value="">
								-->

                                   <form method="get" action="afficher_produit.php"  class="mb-4">
                                   <input type="text" class="form-control" name="recherche" placeholder="product">
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
			  
			  <!-- card-body-->
			  
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" name="prod">
                  <thead>
				  
                  <tr>
                    <th>Id_Produit</th>
                    <th> Id_Categorie</th>
                    <th>Nom_Produit</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Quantite</th>
					<th>Image</th>
					<!--
                    <th> Fonctionnalités </th> -->
                  </tr>
				  
				  
                  </thead>
				  
                  <tbody>
                  
                  
				  <?php
				  foreach($listeproduit as $row){
				  ?>

                  <tr>
                    <td> <?php echo $row['id_produit'];?></td>
                    <td> <?php echo $row['idC'];?></td>
					<td> <?php echo $row['nom_produit'];?></td>
					<td> <?php echo $row['categorie'];?></td>
					<td> <?php echo $row['prix'];?></td>
					 <td> <?php echo $row['quantite'];?></td>
                     
					 <!--
					 <td> <img src="../View/assets/images/ <?php echo $row['image'];?>"  width="90" height="90" alt="Image"></td>
                       -->
                      <td><?PHP echo "<img  src='../../View/assets/images/".$row['image']."' >"; ?>
					  <style>
					  img{
						width: 90px;
                        height:	90px;					
					  }
					  
					  </style>
					  
					  </td>					   

					
					 
					 <!--
					 <td> <img src="../View/assets/images/sushi.jfif"  width="100" height="100" alt="Image"></td>
					 -->
					 
					 
                     <td> 
                     <form method="POST" action="../../View/supprimer_produit.php">
                                        <button type="submit"  id="supprimer"  class="btn btn-danger" onclick="Supp()">supprimer</button>
                                        <input type="hidden" value=<?PHP echo $row['id_produit']; ?> name="id_produit">
                                        </form>
                                        
                                        <!--
                                       <a class="btn btn-primary" href="modifier_produit.php?id_produit=<?PHP echo $row['id_produit']; ?>">Modifier </a>
                                     
									   -->
									   <a class="btn btn-primary" href="MODIF_P.php?id_produit=<?PHP echo $row['id_produit']; ?>">Modifier </a>
                     </td>

                   </tr> 
                   
                  
				  
				  </tbody>
				  
				  
                  <?PHP
				      }
		  	         ?>
                    	
                <div>
				  <!--
				  <a class="btn btn-success" href="trier_produit.php?id_produit=<?PHP echo $row['nom_produit']; ?>">Trier </a>
				  -->
				  <a class="btn btn-success" href="trier_produit.php"><i class="fas fa-sort"></i> </a>
				  				  <a class="btn btn-primary" onclick="refresh()"><i class="fas fa-undo"></i> </a>
								  <style>
								  button{
                                       margin: 13px 12px 12px 10px;
                                        }
								  </style>
								 
				  </div>
                      			

                  						
				</table>
				<br>
				
				<!--
				<table class="table table-bordered table-striped">
				
				<thead>
				  <tr>
				  <th>nomP</th>
				  <th>prix</th>
				  <th>nomC</th>
				  <th>descriptionc</th>
				  
				  
				  </tr>
				  </thead>	

                 <tbody>
				 
				 <?php
				 foreach ($listeproduit as $row){
					
                     echo "<tr>
					 <td>".$row['nom_produit']."<td>
					 <td>".$row['prix']."<td>
					 <td>".$row['nom_categ']."<td>
					 <td>".$row['descriptionc']."<td>
					 
					 
					 </tr>";
                  }
                  ?>				 
				 </tbody>				  
				
				</table>
				-->
				
				<!--
				<button class="btn btn-danger" onclick="print('http://localhost/Projet1/View/afficher_produit.php')">Imprimer le PDF</button>
		
         		 -->
				 <!--
        <button class="btn btn-danger" href="../View/pdf_produit.php"><i class="far fa-file-pdf"></i></button> -->
		
		<a class="btn btn-danger" href="../../View/Back/pdf_produit.php"><i class="far fa-file-pdf"></i> </a>
		
		<button class="btn btn-success" id="btnExport" onclick="exportReportToExcel(this)"><i class="far fa-file-excel"></i></button>
		
		
		
		<br>
		
		
		<form method="POST" action="../../View/Back/linechart/stat.php">
                                        
										<button type="submit"  id="statistique"  class="btn btn-info" href="../../View/Back/linechart/stat.php"> <i class="far fa-chart-bar"></i></button>
										
                    
                                        </form>
        
				<?php 
				for ($x = 1; $x <= $totalP; $x++) :

?>

    <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?> <style>margin:  13px 12px 12px 10px;  </style></a>

<?php endfor; ?>
				
				<script>
			function Supp()
			{
				
				return alert(" Supprimer Produit avec succées ! ");
				
			}
function modif()
{
  return alert(" Modifier Produit avec succées ! ");
}

			 function print(pdf)
			 {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la page Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
			 /*$('.printMe').click(function print(){
             window.print();
});*/
           function refresh(){
			   window.location.reload();
		   }

       function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `gestion_produits.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Produit' // sheetName
    }
  });
}
			
	</script>
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

<!-- Excel table-->
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<!-- jQuery -->
<script src="../../View/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../View/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../View/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../View/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../View/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../View/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../View/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../View/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../View/assets/plugins/jszip/jszip.min.js"></script>
<script src="../../View/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../View/.assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../View/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../View/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../View/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../View/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../View/assets/dist/js/demo.js"></script>
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
