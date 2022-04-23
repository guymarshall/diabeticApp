<?php
    //time (default now)
    //date (default now)
    //blood glucose
    //carbs (default 0)
    //insulin short (default 0)
    //insulin long (default 0)
    //insulin correction (default 0)
    //notes
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
        <input type="number" name="bloodGlucose" id="bloodGlucose">
        <br>
        <label for="carbs">carbs</label>
        <input type="number" name="carbs" id="carbs">
        <br>
        <label for="insulinShort">insulinShort</label>
        <input type="number" name="insulinShort" id="insulinShort">
        <br>
        <label for="insulinLong">insulinLong</label>
        <input type="number" name="insulinLong" id="insulinLong">
        <br>
        <label for="insulinCorrection">insulinCorrection</label>
        <input type="number" name="insulinCorrection" id="insulinCorrection">
        <br>
        <label for="notes">notes</label>
        <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Enter notes..."></textarea>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>