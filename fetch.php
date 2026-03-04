<?php
include 'db.php';

$result = $conn->query("SELECT * FROM employees");

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['first_name']} {$row['last_name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['address']}</td>
        <td>{$row['basic_salary']}</td>
        <td>{$row['annual_salary']}</td>
        <td>
            <button onclick='editData(".json_encode($row).")'>Edit</button>
            <button onclick='deleteData({$row['id']})'>Delete</button>
        </td>
    </tr>";
}
?>