<?php
    // Establish database connection
    $conn = pg_connect("host=linux1 dbname=tybsc091 user=tybsc091 password=qwe");
    if (!$conn)
    {
        die('Connection failed: ' . pg_last_error());
    }
    // Get the selected employee name from AJAX request
    $employeeName = $_POST['employeeName'];
    // Query the EMP table for the details of the selected employee
    $sql = "SELECT * FROM EMP WHERE ename = '$employeeName'";
    $result = pg_query($conn, $sql);
    if (pg_num_rows($result) > 0)
    {
        // Build a JSON object with employee details
        $employee = pg_fetch_assoc($result);
        $response = array(
            'ename' => $employee['ename'],
            'designation' => $employee['designation'],
            'salary' => $employee['salary']
        );
        echo json_encode($response);
    }
    else
    {
        echo "Employee not found";
    }
    // Close database connection
    Pg_close($conn);
?>