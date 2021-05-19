<?php  
  include_once '../model/offre.php';
    include_once '../controller/offreC.php';
//include "../Model/offre.php";


$offreC=new offreC();
$error = "";
if (
    isset($_POST["description"]) &&
    isset($_POST["type"]) &&
    isset($_POST["datedeb"]) &&
    isset($_POST["datefin"]) && 
    isset($_POST["pourcentage"]) 
) {
    if (
    !empty($_POST["type"]) && 
    !empty($_POST["datedeb"]) && 
    !empty($_POST["datefin"]) && 
    !empty($_POST["pourcentage"])

    ) {
        $user = new offre(
            $_POST['description'],
        $_POST['type'],
        $_POST['datedeb'],
        $_POST['datefin'],
        $_POST['pourcentage']
        );
        $offreC->modifieroffre($user, $_GET['id']);
        
        header('Location:afficher_offre.php');
        $message = "L'offre a été bien modifié";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else
        $error = "Missing information";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="type" content="">
    <meta name="author" content="">

    <title>Modifier offre</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
</head>

<body id="page-top" background="bb.jpg">

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
                    $user = $offreC->recupereroffre($_GET['id']);
                ?>


                    <div class="container-fluid">
                    
                     <table border ='1'  align="center" width="100%" bgcolor="#dacef3">
  
                        <div>
                            <form method="POST" action="">
                            <tr>
                <td colspan ='2'>
                <h1 style="color:#000000">****************************Veuillez entrer vos nouvaux donées********************************</h1>
                    </td>
                 </tr>
                                <div class="form-group">
                           <tr> <td>    <p style="color:black;font-size:18px;">identifient</p> </td>
                               <br>
                                  
                                 <td> <input type="text" style="background-color:purple;color:white;width:150px; " class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>" readonly></td>
                             </tr> </div>
                             <div class="form-group">
                               <tr> <td> <p style="color:black;font-size:18px;">Nouvelle Description :</p> </td>
                                   <td>  <input type="text" class="form-control" style="background-color:purple;color:white;width:150px;" name="description" id="description" value="<?php echo $user['description']; ?>"></td>
                               </tr> </div>
                           
                                <div class="form-group">
                               <tr> <td> <p style="color:black;font-size:18px;">Nouvelle type :</p> </td>
                                   <td>  <input type="text" class="form-control" style="background-color:purple;color:white;width:150px;" name="type" id="type" value="<?php echo $user['type']; ?>"></td>
                               </tr> </div>
                                  
                                <div class="form-group">
                                <tr> <td><p style="color:black;font-size:18px;">Nouvelle Date Debut</p></td>
                                <td>  <input type="date" style="background-color:purple;color:white;width:150px;" class="form-control" name="datedeb" id="datedeb" value="<?php echo $user['datedeb']; ?>"></td>
                                    </tr></div>

                                <div class="form-group">
                                <tr> <td> <p style="color:black;font-size:18px;">Nouvelle Date Fin</p></td>
                                <td>   <input type="date" style="background-color:purple;color:white;width:150px;"  class="form-control" name="datefin" rows="10" id="datefin" value="<?php echo $user['datefin']; ?>" ></td>
                                </tr> </div>

                                <div class="form-group">
                               <tr> <td><p style="color:black;font-size:18px;">Nouvelle pourcentage</p></td>
                                <td>  <input type="text" style="background-color:purple;color:white;width:150px;" class="form-control" name="pourcentage" id="pourcentage"  value="<?php echo $user['pourcentage']; ?>"></td>
                                </tr>
                                </div>
                             

                    

                               <tr> <td colspan="2"> <button type="submit" style="background-color:purple;color:white;width:150px;" value="submit" class="btn btn-primary">Submit</button></td> </tr>

                            </form>
                        </div>
                     

  

                          </table>
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
</body>

</html>