<?php
include 'db.php';

$stmt = $conn->prepare("UPDATE employees SET 
first_name=?, last_name=?, middle_name=?, birth_date=?, age=?, 
address=?, basic_salary=?, annual_salary=? WHERE id=?");

$stmt->bind_param("ssssissdi",
$_POST['first_name'],
$_POST['last_name'],
$_POST['middle_name'],
$_POST['birth_date'],
$_POST['age'],
$_POST['address'],
$_POST['basic_salary'],
$_POST['annual_salary'],
$_POST['id']
);

$stmt->execute();
?>