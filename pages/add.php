<?php

require '../models/page.php';
require '../models/file.php';

$content = '';

$content .= '
<form name="glucoseForm" id="glucoseForm" action="add.php" method="post">
	<label class="col-sm-2" for="time">time</label>
	<input class="form-control" type="time" name="time" id="time" value="'.date('H:i').'">
	<label class="col-sm-2" for="date">date</label>
	<input class="form-control" type="date" name="date" id="date" value="'.date('Y-m-d').'">
	<label class="col-sm-2" for="bloodGlucose">bloodGlucose</label>
	<input class="form-control" type="number" name="bloodGlucose" id="bloodGlucose" min="0.0" step="0.1">
	<label class="col-sm-2" for="carbs">carbs</label>
	<input class="form-control" type="number" name="carbs" id="carbs" min="0">
	<label class="col-sm-2" for="insulinShort">insulinShort</label>
	<input class="form-control" type="number" name="insulinShort" id="insulinShort" min="0">
	<label class="col-sm-2" for="insulinLong">insulinLong</label>
	<input class="form-control" type="number" name="insulinLong" id="insulinLong" min="0">
	<label class="col-sm-2" for="insulinCorrection">insulinCorrection</label>
	<input class="form-control" type="number" name="insulinCorrection" id="insulinCorrection" min="0">
	<label class="col-sm-2" for="notes">notes</label>
	<textarea class="form-control" name="notes" id="notes" cols="30" rows="10" placeholder="Enter notes..."></textarea>
	<button type="submit" name="addButton" id="addButton">Add</button>
</form>
';

$user_input = [
	'time' => $time = isset($_POST['time']) ? $_POST['time'] : '',
	'date' => $date = isset($_POST['date']) ? $_POST['date'] : '',
	'bloodGlucose' => $bloodGlucose = isset($_POST['bloodGlucose']) ? filter_var($_POST['bloodGlucose'], FILTER_SANITIZE_NUMBER_FLOAT) : '',
	'carbs' => $carbs = isset($_POST['carbs']) ? filter_var($_POST['carbs'], FILTER_SANITIZE_NUMBER_INT) : '',
	'insulinShort' => $insulinShort = isset($_POST['insulinShort']) ? filter_var($_POST['insulinShort'], FILTER_SANITIZE_NUMBER_INT) : '',
	'insulinLong' => $insulinLong = isset($_POST['insulinLong']) ? filter_var($_POST['insulinLong'], FILTER_SANITIZE_NUMBER_INT) : '',
	'insulinCorrection' => $insulinCorrection = isset($_POST['insulinCorrection']) ? filter_var($_POST['insulinCorrection'], FILTER_SANITIZE_NUMBER_INT) : '',
	'notes' => $notes = isset($_POST['notes']) ? $_POST['notes'] : ''
];

if (isset($_POST['addButton'])) {
	$oFile = new File('../files/'.date('Y.m.d H:i:s').'.txt');
	$oFile->openFile();
	foreach ($user_input as $key => $value) {
		$oFile->appendContent($key.': '.$value."\n"); // double quotes for new line character
	}
	$oFile->closeFile();
	header("Location: index.php");
}

// echo '<pre>';
// print_r($user_input);
// echo '</pre>';

$o_add_page = new Page();
$add_html = $o_add_page->create_page('Add', $content);
echo $add_html;