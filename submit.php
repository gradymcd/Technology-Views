<?php
	$result = $db->query("SELECT * from `data`");
	if (!empty($_POST)) {
		while ($row = $result->fetch_assoc()) {
			$choices = unserialize($row['choices']);
			$answer = $_POST[$row['id']];
			$choices[$answer]++;
			$serialized = serialize($choices);
			$query = $db->query("UPDATE data SET choices='$serialized' WHERE id=" . $row['id']);
		}
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
	<form role="form" method="post" id="submit">
		<?php
			while ($row = $result->fetch_assoc()) {
				echo('<div class="form-group">');
				echo('<h3> ' . $row['question'] . ' </h3>');
				echo('<label for="' . $row['question'] . '"></label>');
				$choices = unserialize($row['choices']);
				foreach ($choices as $key => $value) {
					echo('<input type="radio" name="' . $row['id'] . '" value="' . $key . '">');
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