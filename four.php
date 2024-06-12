<?php


$employees = [
    ['id' => 1, 'name' => 'John Doe', 'position' => 'Software Engineer', 'salary' => 50000],
    ['id' => 2, 'name' => 'Jane Smith', 'position' => 'UI/UX Designer', 'salary' => 60000],
    ['id' => 3, 'name' => 'Michael Johnson', 'position' => 'Project Manager', 'salary' => 70000],
    ['id' => 4, 'name' => 'alia', 'position' => 'Software Engineer', 'salary' => 80000],
    ['id' => 5, 'name' => 'Jashmin', 'position' => 'UI/UX Designer', 'salary' => 90000],
    ['id' => 6, 'name' => 'Rajat', 'position' => 'Project Manager', 'salary' => 10000],
    
];


function getAllEmployees() {
    global $employees;
    return $employees;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Employee Management System</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $allEmployees = getAllEmployees();
        foreach ($allEmployees as $employee) {
            echo "<tr>";
            echo "<td>{$employee['id']}</td>";
            echo "<td>{$employee['name']}</td>";
            echo "<td>{$employee['position']}</td>";
            echo "<td>{$employee['salary']}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>