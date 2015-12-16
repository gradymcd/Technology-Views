<?php
	if (isset($_GET['submitted'])) {
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
	<form role="form">
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
				}
				echo('</div>');
			}
		?>
	</form>
</div>
</body>
</html>