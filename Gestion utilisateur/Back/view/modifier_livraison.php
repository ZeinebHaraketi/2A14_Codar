<?php  

include "../controller/livraisonC.php";
include_once '../model/livraison.php';
//include "../Model/livraison.php";


$livraisonC=new livraisonC();
$error = "";
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["num"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["mail"]) 
) {
    if (
    !empty($_POST["nom"]) && 
    !empty($_POST["prenom"]) && 
    !empty($_POST["num"]) &&
    !empty($_POST["adresse"]) && 
    !empty($_POST["mail"]) 

    ) {
        $user = new livraison(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['num'],
        $_POST['adresse'],
        $_POST['mail'],
        );
        $livraisonC->modifierlivraison($user, $_GET['id']);
        
        header('Location:afficher_livraison.php');
    } else
        $error = "Missing information";
}
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
                if (isset($_GET['id'])) {
                    $user = $livraisonC->recupererlivraison($_GET['id']);
                ?>


                    <div class="container-fluid">
                
                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="id">id</label>
                                    <input type="text" class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nom">nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $user['nom']; ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="prenom">prenom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="num">num</label>
                                    <input type="text" class="form-control" name="num" rows="10" id="num" value="<?php echo $user['num']; ?>" >
                                </div>

                                
                                <div class="form-group">
                                    <label for="adresse">adresse</label>
                                    <input type="text" class="form-control" name="adresse" rows="10" id="adresse" value="<?php echo $user['adresse']; ?>" >
                                </div>

                                <div class="form-group">
                                    <label for="mail">mail</label>
                                    <input type="text" class="form-control" name="mail" rows="10" id="mail" value="<?php echo $user['mail']; ?>" >
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
<?php
}
 else {
            echo "error de chargement";
        }
?>
</body>

</html>