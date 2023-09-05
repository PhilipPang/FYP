<?php
include("conn.php");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
  // Loop through the results and print the data for each row
  while ($row = mysqli_fetch_assoc($result)) {
    $row["student_ID"] ;
    echo "Email: " . $row["student_email"] . "<br>";
    echo "First Name: " . $row["student_firstname"] . "<br>";
    echo "Last Name: " . $row["student_lastname"] . "<br>";
    echo "Birthdate: " . $row["student_birthdate"] . "<br>";
    echo "Gender: " . $row["student_gender"] . "<br>";
    echo "Mobile Number: " . $row["student_mobilenum"] . "<br>";
    echo "Address: " . $row["student_address"] . "<br>";
    echo "Country: " . $row["student_country"] . "<br>";
    echo "IC: " . $row["student_ic"] . "<br>";
    echo "Register Date: " . $row["student_register_date"] . "<br>";
    echo "Active: " . $row["is_active"] . "<br>";
    echo "Profile Picture: " . $row["student_profilepic"] . "<br>";
    echo "Program ID: " . $row["program_ID"] . "<br>";
    echo "Supervisor ID: " . $row["supervisor_ID"] . "<br>";
    echo "Project ID: " . $row["project_ID"] . "<br><br>";
  }
} else {
  echo "No results found.";
}
?>
