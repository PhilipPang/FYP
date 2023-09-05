<?php
include("read-project.php");

// Prepare the update queries for each table

$sql2 = "UPDATE guideline SET
    guide_title = '$_POST[guildeline_title]',
    guide_overview = '$_POST[project_overview]',
    guide_instruction = '$_POST[guide_instruction]',
    guide_file = '$_POST[guide_file]'
    WHERE guideline_ID = $_POST[guideline_ID]";

$sql1 = "UPDATE project SET
    project_name = '$_POST[project_name]',
    project_start_date = '$_POST[start_date]',
    project_end_date = '$_POST[end_date]',
    project_present_date = '$_POST[presentation_date]'
    WHERE project_ID = $_POST[project_ID]";

// Execute the update queries
if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql1)) {
    mysqli_close($conn);
    header("Location: project.php");
} else {
    echo "Error updating data: " . mysqli_error($conn);
}
?>
