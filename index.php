<?php 
$name = $email = $phoneNumber = '';

$errors = ['name'=>'', 'phoneNumber'=>'', 'email'=>''];
// Featching the values
if(isset($_POST['submit'])){
	// name validation
	if (empty($_POST['name'])) {
		// code...
		$errors['name'] = "Name is emply";
	} else {
		// code...
		$name = $_POST['name'];
		// echo $name ;
	}

	// email validation

	if (empty($_POST['email'])) {
		// code...
		$errors['email'] = "Email is emply";
	}else {
		// code...
		$email = $_POST['email'];
		// echo $email;
	}

	// phone number validaation
	if (empty($_POST['phoneNumber'])) {
		// code...
		$errors['phoneNumber'] = "Phone Number is emply";

	}else {
		// code...
		$phoneNumber = $_POST['phoneNumber'];
		// echo $phoneNumber;
	}
}
// cross check for errors
if(array_filter($errors)){
	// echo "We still have massive errors";
}else{
	// echo 'No errors were found';
	$email = $phoneNumber =$name ='';

}





 ?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<form action="index.php" method="POST">
	<div class="forms"><label for="name" >Input both of your names below</label>
	<input type="text" name="name" id="name" placeholder="Names" value="<?php echo $name; ?>" >	
	<div class="errors"><?php echo htmlspecialchars($errors['name']); ?></div>
	</div>

	<div class="forms">
		<label for="email" >Email</label>
		<input type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>" >
		<div class="errors"><?php echo htmlspecialchars($errors['email']);  ?></div>
	</div>

	<div class="forms">
		<label for="phoneNumber">Phone Number</label>
		<input type="text" name="phoneNumber" placeholder="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber; ?>">
		<div class="errors"><?php echo htmlspecialchars($errors['phoneNumber']); ?></div>
	</div>

	<input type="submit" name="submit" id="submitbtn">


</form>


<?php include('templates/footer.php'); ?>



</html>