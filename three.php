<?php


$employees = [
    ['id' => 1, 'name' => 'John Doe', 'position' => 'Software Engineer', 'salary' => 50000],
    ['id' => 2, 'name' => 'Jane Smith', 'position' => 'UI/UX Designer', 'salary' => 60000],
    ['id' => 3, 'name' => 'Michael Johnson', 'position' => 'Project Manager', 'salary' => 70000],
    
];


function addEmployee($name, $position, $salary) {
    global $employees;
    $id = count($employees) + 1;
    $employee = ['id' => $id, 'name' => $name, 'position' => $position, 'salary' => $salary];
    $employees[] = $employee;
    return $id;
}


function getAllEmployees() {
    global $employees;
    return $employees;
}


function getEmployeeById($id) {
    global $employees;
    foreach ($employees as $employee) {
        if ($employee['id'] == $id) {
            return $employee;
        }
    }
    return null;
}


function updateEmployee($id, $name, $position, $salary) {
    global $employees;
    foreach ($employees as &$employee) {
        if ($employee['id'] == $id) {
            $employee['name'] = $name;
            $employee['position'] = $position;
            $employee['salary'] = $salary;
            return true;
        }
    }
    return false;
}


function deleteEmployee($id) {
    global $employees;
    foreach ($employees as $key => $employee) {
        if ($employee['id'] == $id) {
            unset($employees[$key]);
            return true;
        }
    }
    return false;
}



$newEmployeeId = addEmployee('Emily Johnson', 'HR Manager', 55000);
echo "New Employee ID: $newEmployeeId <br>";


$allEmployees = getAllEmployees();
echo "All Employees: <pre>";
print_r($allEmployees);
echo "</pre>";


$employee = getEmployeeById(2);
echo "Employee with ID 2: <pre>";
print_r($employee);
echo "</pre>";


$updateResult = updateEmployee(3, 'Michael Johnson', 'Senior Project Manager', 80000);
if ($updateResult) {
    echo "Employee details updated successfully. <br>";
} else {
    echo "Failed to update employee details. <br>";
}


$deleteResult = deleteEmployee(1);
if ($deleteResult) {
    echo "Employee with ID 1 deleted successfully. <br>";
} else {
    echo "Failed to delete employee with ID 1. <br>";
}

?>