<?php
    // Establish connection to PostgreSQL database
    $conn = pg_connect("host=linux1 dbname=tybsc091 user=tybsc091 password=qwe");
    // Check if connection was successful
    if (!$conn)
    {
        echo "Connection failed.";
        exit;
    }
    // Create student table
    $query = "CREATE TABLE student (
        Rollno INTEGER PRIMARY KEY,
        Name VARCHAR(50) NOT NULL,
        Class VARCHAR(10) NOT NULL
    )";
    $result = pg_query($conn, $query);
    if (!$result)
    {
        echo "Error creating table: " . pg_last_error($conn);
        exit;
    }
    else
    {
        echo "Table created successfully.<br>";
    }
    // Insert 5 records into student table
    $insert_query = "INSERT INTO student (rollno, name, class)
    VALUES (1, 'John Doe', '10A'),
    (2, 'Jane Smith', '9B'),
    (3, 'Bob Johnson', '11C'),
    (4, 'Sarah Lee', '12D'),
    (5, 'Tom Brown', '8E')";
    $insert_result = pg_query($conn, $insert_query);
    if (!$insert_result)
    {
        echo "Error inserting records: " . pg_last_error($conn);
        exit;
    }
    else
    {
        echo "Records inserted successfully.";
    }
    // Close database connection
    Pg_close($conn);
?>