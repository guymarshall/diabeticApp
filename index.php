<?php
require_once('database.php');
session_start();
?>

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
	<?php if (isset($_SESSION['email']) && isset($_SESSION['password'])): ?>
		<button name="logout" id="logout" onclick="location.href = 'logout.php';">Logout</button>
	<?php else: ?>
		<button name="login" id="login" onclick="location.href = 'login.php';">Login</button>
	<?php endif; ?>
	<h1>Diabetic App</h1>
	<button id="reloadButton" name="reloadButton">Reload</button>
	<br>
	<div id="chartDiv">
		<canvas id="myChart" width="100%" height="45%"></canvas>
	</div>
	<script src="script.js"></script>

	<?php
	// Get user_input from database
	$user_input = [];
	
	if (isset($_SESSION['email'])) {
		echo '<br>' . 'email: ' . $_SESSION['email'];
	}
	if (isset($_SESSION['password'])) {
		echo '<br>' . 'password: ' . $_SESSION['password'];
	}
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