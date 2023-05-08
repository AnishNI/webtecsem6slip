<?php
    // Define student details
    $students = array(
    array("rollno" => 1, "name" => "John Doe", "address" => "123 Main St", "college" => "ABC College",
        "course" => "Computer Science"),
    array("rollno" => 2, "name" => "Jane Smith", "address" => "456 Main St", "college" => "DEF College",
        "course" => "Information Technology"),
    array("rollno" => 3, "name" => "Bob Johnson", "address" => "789 Main St", "college" => "GHI College",
        "course" => "Business Administration"),
    array("rollno" => 4, "name" => "Sarah Lee", "address" => "101 Main St", "college" => "JKL College",
        "course" => "Marketing"),
    array("rollno" => 5, "name" => "Tom Brown", "address" => "121 Main St", "college" => "MNO College",
        "course" => "Computer Science")
    );
    // Create a SimpleXMLElement object
    $xml = new SimpleXMLElement('<students></students>');
    // Add student elements to the XML object
    foreach ($students as $student)
    {
        $student_element = $xml->addChild('student');
        $student_element->addChild('rollno', $student['rollno']);
        $student_element->addChild('name', $student['name']);
        $student_element->addChild('address', $student['address']);
        $student_element->addChild('college', $student['college']);
        $student_element->addChild('course', $student['course']);
    }
    // Save the XML data to a file
    $xml->asXML('student.xml');
    // Get course input from user
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    // Load the XML file
    $xml = simplexml_load_file('student.xml');
    // Find students with matching course
    $filtered_students = $xml->xpath("//student[course='$course']");
    // Print table of matching students
    echo "<table border='1'>";
    echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";
    foreach ($filtered_students as $student)
    {
        echo "<tr>";
        echo "<td>{$student->rollno}</td>";
        echo "<td>{$student->name}</td>";
        echo "<td>{$student->address}</td>";
        echo "<td>{$student->college}</td>";
        echo "<td>{$student->course}</td>";
        echo "</tr>";
    }
    echo "</table>";
?>