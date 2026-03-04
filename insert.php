<?php
include 'db.php';

$stmt = $conn->prepare("INSERT INTO employees 
(first_name,last_name,middle_name,birth_date,age,address,basic_salary,annual_salary)
VALUES (?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssisdd",
$_POST['first_name'],
$_POST['last_name'],
$_POST['middle_name'],
$_POST['birth_date'],
$_POST['age'],
$_POST['address'],
$_POST['basic_salary'],
$_POST['annual_salary']
);

$stmt->execute();
?>