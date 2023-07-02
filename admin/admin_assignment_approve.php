<?php
$id = intval($_GET['id']);


try{
    include("conn.php");

    $sql = "UPDATE project SET
    is_approve = 1 
    WHERE project_ID = $id";

    $date = date("Y-m-d");
    $mysupervisor = null;
    
    $result2 = mysqli_query($con,"SELECT main_supervisor_ID FROM project WHERE project_ID = $id");
    while ($row = mysqli_fetch_array($result2)){
        $mysupervisor = $row["main_supervisor_ID"];
    }

    $sql2 = "INSERT INTO notification (`supervisor_ID`, `notification_title`, `notification_message`, `created_at`, `is_read`)
    VALUES ('$mysupervisor','Accepted!', 'Your assignment has been accepted!', '$date' , 0)";

    if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
        echo "<script> alert('Approved Assignment!'); window.location.href='admin_assignment.php';</script>";
    }
    else{
        echo "<script> alert('Fail to reject Assignment!'); window.location.href='admin_assignment.php';</script>";
    }
            
}

catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}

?>
