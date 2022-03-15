<?php

$name = $_POST['nameOfUser'];
$email = $_POST['emailOfUser'];
$subject = $_POST['subjectOfUser'];
$message = $_POST['messageOfUser'];

$fp = fopen('static.txt', 'a'); //opens file in append mode
fwrite($fp, 'Name :' . $name . ' Email : ' . $email . ' Subject : ' . $subject . ' Message :  ' . $message . ' ' . "\n" . '');
// fwrite($fp, 'Hello friend!' . "\n" . 'This will appear on a new line.' . "\n" . 'As will this');
fclose($fp);

echo "File appended successfully";
