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
				echo('<h3>' . $row['question'] . '</h3><div>');
				$choices = unserialize($row['choices']);
				$total = 0;
				echo('<canvas id="canvas' . $row['id'] . '"></canvas>');
				foreach ($choices as $key => $value) {
					$total += $value;
				}
				foreach ($choices as $key => $value) {
					echo('<p>' . $key . ': ' . $value . ' (' . ($value / $total) * 100 . '%)');
					echo('</p>');
				}
				echo('</div>');
			}
		?>
	</div>
	<script type="text/javascript"
	        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<script type="text/javascript">
		var data = [
			<?php
				$result = $db->query("SELECT * from data");
				while ($row = $result->fetch_assoc()) {
					echo('data' . $row['id'] . '=[');
					foreach ($choices as $key => $value) {
						$hue = rand(0, 255);
						echo('
							{
								value: "' . $key . '",
								color: "hsla(' . $hue . ', 100%, 50%, .4)",
								highlight: "hsla(' . $hue . ', 100%, 50%, 1)",
								label: "' . $key . '",
							},
						');
					}
					echo('],');
				}
			?>
		];
		<?php
			$result = $db->query("SELECT * from data");
			 while ($row = $result->fetch_assoc()) {
				echo('
					var canvas' . $row['id'] .  '  = document.getElementById(data' . $row['id' ]. '").getContext("2d");
					var chart' . $row['id'] . '  = new Chart(canvas' . $row['id'] . ').Pie(data' . $row['id'] .');
				');
			}
		?>
	</script>
</body>
</html>