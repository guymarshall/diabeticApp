<?php
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
	<button name="back" id="back" onclick="location.href = 'index.php';">Back</button>
	<h1>Login</h1>
	<form action="login.php" method="post">
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" placeholder="Email Address..." autocomplete="nope">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password...">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
$login_details = [
    'email' => $email = isset($_POST['email']) ? $_POST['email'] : '',
    'password' => $password = isset($_POST['password']) ? $_POST['password'] : ''
];

if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    $_SESSION['email'] = $login_details['email'];
    $_SESSION['password'] = $login_details['password'];
}

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    header('Location: index.php');
}

// bug - cannot access page, instead logs in with '' and '' as email and password

// echo '<pre>';
// print_r($login_details);
// echo '</pre>';
?>