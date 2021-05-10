<?php  

include "../Controller/blogB.php";
include_once '../Model/blog.php';
//include "../Model/blog.php";


$blogB=new blogB();
$error = "";
if (
    isset($_POST["TitreB"]) &&
    isset($_POST["DescriptionB"]) &&
    isset($_POST["ImageB"]) 
) {
    if (
    !empty($_POST["TitreB"]) && 
    !empty($_POST["DescriptionB"]) && 
    !empty($_POST["ImageB"])

    ) {
        $user = new blog(
        $_POST['TitreB'],
        $_POST['DescriptionB'],
        $_POST['ImageB']
        );
        $blogB->modifierblog($user, $_GET['idB']);
        
        header('Location:../back/afficher_blog.php');
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
    <meta name="nom" content="">
    <meta name="author" content="">

    <title>Modifier BLOG</title>

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
                if (isset($_GET['idB'])) {
                    $user = $blogB->recupererblog($_GET['idB']);
                ?>


                    <div class="container-fluid">
                
                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="idB">idB</label>
                                    <input type="text" class="form-control" name="idB" id="idB" value="<?php echo $user['idB']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="TitreB">TitreB</label>
                                    <input type="text" class="form-control" name="TitreB" id="TitreB" value="<?php echo $user['TitreB']; ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for="DescriptionB">DescriptionB</label>
                                    <input type="text" class="form-control" name="DescriptionB" id="DescriptionB" value="<?php echo $user['DescriptionB']; ?>">
                                </div>

                                </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">
                          Select image to upload:
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" id="ImageB" class="form-control" name="ImageB">
                        </div>
                      </div>
                      <div class="clearfix"></div>
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
} else {
            echo "error de chargement";
        }
?>
</body>

</html>