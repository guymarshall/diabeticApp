<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button name="back" id="back" onclick="location.href = 'index.php';">Back</button>
    <form name="glucoseForm" id="glucoseForm" action="" method="post">
    <label for="time">time</label>    
    <input type="time" name="time" id="time" value="<?php echo date('H:i'); ?>">
        <br>
        <label for="date">date</label>
        <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
        <br>
        <label for="bloodGlucose">bloodGlucose</label>
        <input type="number" name="bloodGlucose" id="bloodGlucose" min="0.0" step="0.1">
        <br>
        <label for="carbs">carbs</label>
        <input type="number" name="carbs" id="carbs" min="0">
        <br>
        <label for="insulinShort">insulinShort</label>
        <input type="number" name="insulinShort" id="insulinShort" min="0">
        <br>
        <label for="insulinLong">insulinLong</label>
        <input type="number" name="insulinLong" id="insulinLong" min="0">
        <br>
        <label for="insulinCorrection">insulinCorrection</label>
        <input type="number" name="insulinCorrection" id="insulinCorrection" min="0">
        <br>
        <label for="notes">notes</label>
        <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Enter notes..."></textarea>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>

<?php
    $user_input = [
        'time' => $time = isset($_POST['time']) ? $_POST['time'] : '',
        'date' => $date = isset($_POST['date']) ? $_POST['date'] : '',
        'bloodGlucose' => $bloodGlucose = isset($_POST['bloodGlucose']) ? $_POST['bloodGlucose'] : '',
        'carbs' => $carbs = isset($_POST['carbs']) ? $_POST['carbs'] : '',
        'insulinShort' => $insulinShort = isset($_POST['insulinShort']) ? $_POST['insulinShort'] : '',
        'insulinLong' => $insulinLong = isset($_POST['insulinLong']) ? $_POST['insulinLong'] : '',
        'insulinCorrection' => $insulinCorrection = isset($_POST['insulinCorrection']) ? $_POST['insulinCorrection'] : '',
        'notes' => $notes = isset($_POST['notes']) ? $_POST['notes'] : ''
    ];

    // echo '<pre>';
    // print_r($user_input);
    // echo '</pre>';

    if (isset($_SESSION['email'])) {
        echo '<br>' . 'email: ' . $_SESSION['email'];
    }
    if (isset($_SESSION['password'])) {
        echo '<br>' . 'password: ' . $_SESSION['password'];
    }
?>

<table>
    <?php foreach ($user_input as $input): ?>
    <tr>
        <td><?php echo $input; ?></td>
    </tr>
    <?php endforeach; ?>
</table>