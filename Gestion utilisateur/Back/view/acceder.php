<?php  

include "../controller/blogB.php";
include_once '../model/blog.php';



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

    <title>XXX</title>

    <div class="col-md-6 col-sm-6 ">
                          <input type="text" value="<?php echo $TitreB; ?>" name="TitreB" required="required" class="form-control " >
                        </div>


                        <textarea name="DescriptionB">
    <?php echo $DescriptionB; ?>
  </textarea>
</html>