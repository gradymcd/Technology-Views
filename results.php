<!DOCTYPE html>
<html>
<head>
	<title>Technology Views - Results</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/paper/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<?php
			include('db.php');
			$result = $db->query("SELECT * from data");

			while ($row = $result->fetch_assoc()) {
				echo('<h3>' . $row['question'] . '</h3>');
				$choices = unserialize($row['choices']);
				foreach ($choices as $key => $value) {
					echo('<p>' . $key . '</p>');
				}
			}
		?>
	</div>
	<script type="text/javascript"
	        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
</body>
</html>