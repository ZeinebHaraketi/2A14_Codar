<?php  
include "../Controller/produitC.php";
include_once '../Model/produit.php';
//include "../Model/produit.php";


$associC=new produitC();
$error = "";
if (
    isset($_POST["nom_produit"]) && 
    isset($_POST["categorie"]) &&
    isset($_POST["prix"]) && 
    isset($_POST["quantite"]) 
) {
    if (
        !empty($_POST["nom_produit"]) && 
    !empty($_POST["categorie"]) && 
    !empty($_POST["prix"]) && 
    !empty($_POST["quantite"])

    ) {
        $associ = new produit(
            $_POST['nom_produit'],
        $_POST['categorie'],
        $_POST['prix'],
        $_POST['quantite']
        );
        $associC->modifierproduit($associ,$_GET['id_produit']);
        
        header('Location:../View/afficher_produit.php');
    } else
        echo "Missing information";
}
?>


<!DOCTYPE html>
<html lang="en">

 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier Produit</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
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
                if (isset($_GET['id_produit'])) {
                    $associ = $associC->recupererproduit($_GET['id_produit']);
                ?>


                    <div class="container-fluid">

                        <div>
                        <!--modifier_produit.php-->
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="id_produit">id_produit</label>
                                    <input type="int" class="form-control" name="id_produit" id="id_produit" value="<?php echo $associ['id_produit']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nom_produit">nom_produit</label>
                                    <input type="string" class="form-control" name="nom_produit" id="nom_produit" value="<?php echo $associ['nom_produit']; ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="categorie">categorie</label>
                                    <input type="string" class="form-control" name="categorie" id="categorie" value="<?php echo $associ['categorie']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="prix">prix</label>
                                    <input type="float" class="form-control" name="prix" rows="10" value="<?php echo $associ['prix']; ?>" >
                                </div>

                                <div class="form-group">
                                    <label for="quantite">quantite</label>
                                    <input type="int" class="form-control" name="quantite" value="<?php echo $associ['quantite']; ?>">
                                </div>
                           



                                <button type="submit" value="Envoyer" class="btn btn-primary" onclick="Modif()">Submit</button>

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
                } else {
                    echo "error de chargement";
                }
    ?>
	
	<script>
			function Modif()
			{
				
				return alert(" Modifier Produit avec succées ! ");
				
			}
			
			</script>
 </body>

</html>