<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h5>1. Where is Ford William located?</h5>
					</div>
					<div class="card-body">
						<form action="new.php" method="post">
							<input type="submit" class="btn btn-primary btn-block" value="a. Chennai" name="optiona1">
							<input type="submit" class="btn btn-primary btn-block" value="b. Goa" name="optionb1">
							<input type="submit" class="btn btn-primary btn-block" value="c. Kolkata" name="optionc1">
							<input type="submit" class="btn btn-primary btn-block" value="d. Mysore" name="optiond1">
						</form>
					</div>
					<div class="card-footer">
						<div class="text-danger">
							<?php
								if (isset($_POST["optiona1"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif (isset($_POST["optionb1"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif (isset($_POST["optiond1"])){
									echo "<b>Incorrect option.</b>";
								}
							?>
						</div>
						<div class="text-success">
							<?php
								if (isset($_POST["optionc1"])){
									echo "<b>Correct option.</b>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h5>2. Name this Indian Tannis player who has turned Hollywood filmaker?</h5>
					</div>
					<div class="card-body">
						<form action="new.php" method="post">
								<input type="submit" class="btn btn-primary btn-block" name="optiona2" value="a. Leander Paes">
								<input type="submit" class="btn btn-primary btn-block" name="optionb2" value="b. Mahesh Bhupati">
								<input type="submit" class="btn btn-primary btn-block" name="optionc2" value="c. Vijay Amritraj">
								<input type="submit" class="btn btn-primary btn-block" name="optiond2" value="d. Ashok Amritraj">
						</form>
					</div>
					<div class="card-footer">
						<div class="text-danger">
							<?php
								if (isset($_POST["optiona2"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif (isset($_POST["optionb2"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif (isset($_POST["optionc2"])){
									echo "<b>Incorrect option.</b>";
								}
							?>
						</div>
						<div class="text-success">
							<?php
								if (isset($_POST["optiond2"])){
									echo "<b>Correct option.</b>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h5>3. Sishu is the literary work of which Indian author?</h5>
					</div>
					<div class="card-body">
						<form action="new.php" method="post">
							<input type="submit" class="btn btn-primary btn-block" value="a. Vikram Seth" name="optiona3">
							<input type="submit" class="btn btn-primary btn-block" value="b. Jawaharlal Nehru" name="optionb3">
							<input type="submit" class="btn btn-primary btn-block" value="c. Rabindranath Tagor" name="optionc3">
							<input type="submit" class="btn btn-primary btn-block" value="d. Arundhati Roy" name="optiond3">
						</form>
					</div>
					<div class="card-footer">
						<div class="text-danger">
							<?php
								if (isset($_POST["optiona3"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif(isset($_POST["optionb3"])){
									echo "<b>Incorrect option.</b>";
								}
								elseif (isset($_POST["optiond3"])){
									echo "<b>Incorrect option.</b>";
								}
							?>
						</div>
						<div class="text-success">
							<?php
								if (isset($_POST["optionc3"])){
									echo "<b>Correct option.</b>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>