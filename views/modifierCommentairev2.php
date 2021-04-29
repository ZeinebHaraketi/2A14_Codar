<?php 
include "config.php";
require "../controller/BlogB.php";
include_once '../Model/Blog.php';

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {

			$nomB = $_POST['nomB'];
			$emailB = $_POST['emailB'];
			$messageB = $_POST['messageB'];
			$idB = $_POST['idB'];
		// write the update query
		$sql = "UPDATE `commentaire` SET `nomB`='$nomB',`emailB`='$emailB',`messageB`='$messageB' WHERE `idB`='$idB'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Product updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['idB'])) {
	$user_id = $_GET['idB'];

	// write SQL to get user data
	$sql = "SELECT * FROM `commentaire` WHERE `idB`='$idB'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$nomB = $row['nomB'];
			$emailB = $row['emailB'];
			$messageB = $row['messageB'];
			$idB = $row['idB'];
		}

	?>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
		<h2>Update Blog</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Blog information:</legend>
		    <label for="lib">Libelle:</label><br>
		    <input type="text" name="nomB" id="nomB" value="<?php echo $nomB; ?>">
		    <input type="hidden" name="idB" value="<?php echo $idB; ?>">
		    <br>
		   	<label for="emailB">Email:</label><br>
		    <input type="text" name="emailB" id="emailB" value="<?php echo $emailB; ?>">
		    <br>
		    <label for="messageB">Message:</label><br>
		    <input type="text" name="messageB" id="messageB" value="<?php echo $messageB; ?>">
		    <br>
		    <input type="submit" value="Update" name="update" id="update" class="btn btn-primary" style="margin-top:20px;">
			   <a href="afficherBlog.php" class="btn btn-success" style="margin-top:20px;">Go back to view</a>
		  </fieldset>
		</form>
		<script src="test2.js">
		
		</script>
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: afficherBlog.php');
	}

}
?>