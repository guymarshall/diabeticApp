<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<title>Diabetic App</title>
</head>
<body>
	<button name="add" id="add" onclick="location.href = 'add.php';">Add</button>
	<button name="login" id="login" onclick="location.href = 'login.php';">Login</button>
	<h1>Diabetic App</h1>
	<div class="container">
		<input type="datetime-local" id="datetime" name="datetime">
	</div>
	<button id="reloadButton" name="reloadButton">Reload</button>
	<br>
	<div id="chartDiv">
		<canvas id="myChart" width="100%" height="45%"></canvas>
	</div>
	<script src="script.js"></script>

	<?php
		// Get user_input from database
		$user_input = [];
	?>

	<table>
		<?php if (isset($user_input)): ?>
			<?php foreach ($user_input as $input): ?>
			<tr>
				<td><?php echo $input; ?></td>
			</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</table>
</body>
</html>