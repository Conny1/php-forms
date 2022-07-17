<?php 

$errors = ['name'=>'', 'phoneNumber'=>'', 'email'=>''];

if(isset($_POST['submit'])){
	if (empty($_POST['name'])) {
		// code...
		$errors['name'] = "Name is emply";
	}
	if (empty($_POST['email'])) {
		// code...
		$errors['email'] = "Email is emply";
	}
	if (empty($_POST['phoneNumber'])) {
		// code...
		$errors['phoneNumber'] = "Phone Number is emply";
	}
}





 ?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<form action="index.php" method="POST">
	<div class="forms"><label for="name" >Input both of your names below</label>
	<input type="text" name="name" id="name" placeholder="Names" >	
	<div class="errors"><?php echo $errors['name']; ?></div>
	</div>

	<div class="forms">
		<label for="email" >Email</label>
		<input type="email" name="email" id="email" placeholder="Enter Email">
		<div class="errors"><?php echo $errors['email']; ?></div>
	</div>

	<div class="forms">
		<label for="phoneNumber">Phone Number</label>
		<input type="text" name="phoneNumber" placeholder="phoneNumber" id="phoneNumber">
		<div class="errors"><?php echo $errors['phoneNumber']; ?></div>
	</div>

	<input type="submit" name="submit" id="submitbtn">


</form>


<?php include('templates/footer.php'); ?>



</html>