<?php  

include_once '../model/reser.php';
    include_once '../controller/reserC.php';
 
 
$reserC=new reserC();
$error = "";
if (
    isset($_POST["nom"]) && 
    isset($_POST["dat"]) &&
    isset($_POST["nbp"]) &&
    isset($_POST["nresto"]) &&
 
    isset($_POST["email"]) 
) {
    if (
        !empty($_POST["nom"]) && 
        !empty($_POST["dat"]) &&
        !empty($_POST["nbp"]) &&
        !empty($_POST["nresto"]) &&
     
        !empty($_POST["email"]) 
   

    ) {
        $user = new reser(
            $_POST['nom'],
        $_POST['dat'],
        $_POST['nbp'],
        $_POST['nresto'],
    
        $_POST['email'],
        );
        $reserC->modifierresers($user,$_GET['idr']);
        
        header('Location:afficher-reser.php');
    } else
        echo "Missing information";
}
                
?>

<!DOCTYPE html>
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

   <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             


                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['idr'])) 
                {
                    $user = $reserC-> recupererreser($_GET['idr']);
                ?>


                    <div class="container-fluid">
                
                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="idr">id</label>
                                    <input type="text" class="form-control" name="idr" id="idr" value="<?php echo $user['idr']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nom">nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $user['nom']; ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="dat">Date</label>
                                    <input type="text" class="form-control" name="dat" id="dat" value="<?php echo $user['dat']; ?>">
                                </div>


                                <div class="form-group">
                                    <label for="nbp">Nombre de places</label>
                                    <input type="text" class="form-control" name="nbp" id="nbp" value="<?php echo $user['nbp']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nresto">Nom du resto</label>
                                    <input type="text" class="form-control" name="nresto" id="nresto" value="<?php echo $user['nresto']; ?>">
                                </div>


                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" name="email" id="email"  value="<?php echo $user['email']; ?>">
                                </div>
                           



                                <button type="submit" value="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                     




                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
   
    
   </body>
</html> 
<?php
                }
                ?>
    


