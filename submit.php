<?php
	if (!empty($_POST)) {
		header('Location: results.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Technology Views - Submit</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/paper/bootstrap.min.css">
</head>
<body>
<div class="container">
	<form role="form" action="submit.php" method="post" id="submit">
		<?php
			include('db.php');
			$result = $db->query("SELECT * from `data`");
			while ($row = $result->fetch_assoc()) {
				echo('<div class="form-group">');
				echo('<h3> ' . $row['question'] . ' </h3>');
				echo('<label for="' . $row['question'] . '"></label>');
				$options = unserialize($row['choices']);
				foreach ($options as $key => $value) {
					echo('<input type="radio" name="' . $row['id'] . '" id="' . $row['id'] . $key . '">');
					echo($key . '<br>');
				}
				echo('</label>');
				echo('</div>');
			}
		?>
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>
</div>
</body>
</html>