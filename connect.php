<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_id = $_POST["student_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $class = $_POST["batch"];
    $email = $_POST["email"];
    $english = $_POST["english"];
    $hindi = $_POST["hindi"];
    $maths = $_POST["maths"];
    $science = $_POST["science"];
    $history = $_POST["history"];
    $geography = $_POST["geography"];
    $remarks = $_POST["remarks"];

    // Calculate total marks and percentage
    $total_marks = $english + $hindi + $maths + $science + $history + $geography;
    $percentage = ($total_marks / 600) * 100;

    // Determine grade
    if ($percentage >= 75) {
        $grade = "Distinction";
    } elseif ($percentage >= 60 ) {
        $grade = "First Class";
    } elseif ($percentage >= 33 ) {
        $grade = "Pass";
    } else {
        $grade = "Fail";
    }

    // Format percentage and total marks to display only two decimal points
    $percentage = number_format($percentage, 2);
    $total_marks = number_format($total_marks, 2);

    // Display the results
    echo "<h2>Student Information</h2>";
    echo "<p><strong>Student ID:</strong> $student_id</p>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<h3>Subject Marks</h3>";
    echo "<p><strong>English:</strong> $english</p>";
    echo "<p><strong>Hindi:</strong> $hindi</p>";
    echo "<p><strong>Maths:</strong> $maths</p>";
    echo "<p><strong>Science:</strong> $science</p>";
    echo "<p><strong>History:</strong> $history</p>";
    echo "<p><strong>Geography:</strong> $geography</p>";
    echo "<p><strong>Total Marks:</strong> $total_marks</p>";
    echo "<p><strong>Percentage:</strong> $percentage%</p>";
    echo "<p><strong>Grade:</strong> $grade</p>";
    echo "<p><strong>Remarks:</strong> $remarks</p>";
} else {
    // If the form is not submitted, redirect back to the form page or display an error message
    header("Location: index.php");
    exit;
}
?>
