<?php

include_once 'db_connection.php';


function addEmployee($name, $position, $salary) {
    global $conn;
    $sql = "INSERT INTO employees (name, position, salary) VALUES ('$name', '$position', '$salary')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


function getAllEmployees() {
    global $conn;
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);
    $employees = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
    }
    return $employees;
}


function getEmployeeById($id) {
    global $conn;
    $sql = "SELECT * FROM employees WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Function to update an employee
function updateEmployee($id, $name, $position, $salary) {
    global $conn;
    $sql = "UPDATE employees SET name='$name', position='$position', salary='$salary' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


function deleteEmployee($id) {
    global $conn;
    $sql = "DELETE FROM employees WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


?>