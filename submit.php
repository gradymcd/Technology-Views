<!DOCTYPE html>
<html>
<head>
	<title>Technology Views - Submit</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/paper/bootstrap.min.css">
</head>
<body>
<h3 class="well">
	<?php
		include('db.php');
		$result = $db->query("SELECT * from `data`");
		while ($row = $result->fetch_assoc()) {
			echo($row['question']);
		}
	?>
</h3>

</body>
</html>