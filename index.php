<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div></div>
	<form action="dobav.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="text">
		<input type="date" name="data">
		<input type="file" name="img">
		<button>Click me</button>
	</form>
	<div class="container">
		<div class="container mt-3">
			<div class="row">
				<div class="col-12">
					<div class="body">
						<?php
							$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
							$query = mysqli_query($connect, 'SELECT * FROM example');
						?>
						<?php for($i = 0; $i < $query->num_rows; $i++) {
							$img = $query->fetch_assoc(); echo '<img src="' . $img['img'] . '" class="w-5 h-5">'; 
						?>
							<p>
								<?php echo $img['text']; ?>
							</p>
							<p>
								<?php echo $img['data']; ?>
							</p>
							<form action="delete.php" method="GET">
								<?php echo '<input name="id" value="' . $img['id'] . '" style="display: none">'; ?>
								<button type="" class="">Delete</button>
							</form>
							<form action="redactor.php" method="POST">
								<?php echo '<input type="hidden" name="id" value="' . $img['id'] . '">'; ?>
								<?php echo '<input type="hidden" name="text" value="' . $img['text'] . '">'; ?>
								<?php echo '<input type="hidden" name="data" value="' . $img['data'] . '">'; ?>
								<?php echo '<input type="hidden" name="img" value="' . $img['img'] . '">'; ?>
								<button type="" class="">Редактировать</button>
							</form>
							<form action="status.php" method="POST">
								<?php echo '<input type="hidden" name="id" value="' . $img['id'] . '">'; ?>
								<button>DONE</button>
							</form>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>