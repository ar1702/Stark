<?php
include 'db.php';
$conn->query("DELETE FROM employees WHERE id=".$_POST['id']);
?>