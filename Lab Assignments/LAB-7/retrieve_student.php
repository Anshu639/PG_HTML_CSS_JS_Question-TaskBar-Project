<?php
    $student_id = $_POST['student_id'];
    $data = file_get_contents('stuData.json');
    $student_data = json_decode($data, true);
    $found = false;
    foreach ($student_data as $student) {
        if ($student['Student ID: '] == $student_id) {
            $found = true;
            echo "<h2>Student Details</h2>";
            echo "Student ID: " . $student['Student ID: '] . "<br>";
            echo "Name: " . $student['Name'] . "<br>";
            echo "Roll No: " . $student['Roll No'] . "<br>";
            echo "Marks: " . $student['Marks'] . "<br>";
            echo "Timestamp: " . $student['Timestamp'] . "<br>";
            break;
        }
    }
    if (!$found) {
        echo "Student not found!";
    }
?>