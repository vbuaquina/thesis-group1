<!DOCTYPE html>
<html>
<head>
	<title>Camera</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="response.php" enctype="multipart/form-data">
					<div class="form-group">
						<label for="usr">Image URL:</label>
						<input type="text" class="form-control" id="url" name="url">
						<br />
						<button type="submit" name="submit" class="btn btn-primary">Upload</button>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

</body>
</html>