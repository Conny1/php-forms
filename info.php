<?php 
// connecct to database
include('config/db_config.php');

// create sql queries

$sql = "SELECT id, name, email, phone FROM contact ORDER BY created_at";

// execute the command
$result = mysqli_query($conn, $sql);

// fetch as an array

 $infos =  mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($infos);


// delet form

if(isset($_POST['delete'])){

	// echo "Deleted";
// Securing the request
	$to_delete = mysqli_real_escape_string($conn,$_POST['item']);

	// querry for deleting
	$sql = "DELETE FROM contact WHERE id = '$to_delete' ";

	// confirm delete
	if (mysqli_query($conn,$sql)) {
		// echo 'sucesss';
		
		
	}else{
		echo 'Error deleting data'. mysqli_error();
	}

	// release result from the memorry
	mysqli_free_result($result);
	// ddisconeestng the database
	mysqli_close($conn);




}else{
	echo 'nah';
}






 ?>

 <!DOCTYPE html>
 <html>

<?php  include('templates/header.php'); ?>


<div class="info-container">
	<?php foreach ($infos as $info ){ ?>
	<div class="info">
		<ul>
		<li>Name: <?php echo $info['name']; ?></li>
		<li>Email: <?php echo $info['email']; ?></li>
		<li>Phone number: <?php echo $info['phone']; ?></li>
	</ul>

	<form action="info.php" method="POST">
		<input type="hidden" name="item" value="<?php echo $info['id']; ?>">
		<input type="submit" name="delete" value="DELETE">
	</form>

	</div>

<?php } ?>

	

</div>


<?php  include('templates/footer.php'); ?>


 </html>