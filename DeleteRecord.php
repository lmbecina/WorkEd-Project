<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DBMS</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background-color: gray">
	<div class="container">
		<h1>Delete Information</h1>
		<hr>
	<div class="row" id="myForm">
		<div class="col-xs-12">
			<?php  
				include 'Delete.php';
				?>
			<form method="GET" action="Delete2.php">
				<input type="hidden" name="deleteID" class="form-control" value="<?php echo $deleteID?>">
				<h5>First Name:</h5> <input type="text"  name="deletefName" style="width: 200%" value="<?php echo $deletefName?>">
				<br>
				<h5>Last Name:</h5> <input type="text"  name="deletelName"style="width:200%" value="<?php echo $deletelName?>">
				<br>
				<h5>Course:</h5> <input type="text"   name="deleteCourse" style="width: 200%" value="<?php echo $deleteCourse?>">
				<br>
				<h5>Work Assignment:</h5> <input type="text"  name="deleteWorkAss" style="width: 200%" value="<?php echo $deleteWorkAss?>">
				<br>
				<h5>Work Schedule:</h5> <input type="text"   name="deleteSched" style="width: 200%" value="<?php echo $deleteSched?>">
				<br>
				<h5>Department:</h5> <input type="text"   name="deleteDepartment" style="width: 200%" value="<?php echo $deleteDepartment?>">
				<br>
				<h5>Supervisor:</h5> <input type="text"  name="deleteSupervisor" style="width: 200%" value="<?php echo $deleteSupervisor?>">
				<p></p>
				<button  type="submit" class="btn btn-success">Delete</button>
			</form>
		</div>
	</div>
</body>
</html>