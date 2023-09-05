<?php
    include("../src/action/conn.php");
    include("../session.php");

    $flipValue = 0; // Initialize with 0 as default

    if (isset($_POST['flip'])) {
        // Assuming the checkbox value is "1" when checked and not present when unchecked
        if ($_POST['flip'] == 1) {
            $flipValue = 1;
        }elseif ($_POST['flip'] == 'flip-switch-inner'){
            $flipValue = 0;
        }

        $appointmentID = $_POST['appointment_ID'];

        $sql = "UPDATE appointment SET
            is_approve = '$flipValue'
            WHERE appointment_ID = $appointmentID";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: appointment.php");
        } else {
            echo "Error updating appointment: " . mysqli_error($conn);
        }
    } else {
        if ($_POST['flip'] == 0) {
            $flipValue = 0;
        }

        $appointmentID2 = $_POST['appointment_ID'];

        $sql2 = "UPDATE appointment SET
            is_approve = '$flipValue'
            WHERE appointment_ID = $appointmentID2";

        if (mysqli_query($conn, $sql2)) {
            mysqli_close($conn);
            header("Location: appointment.php");
        } else {
            echo "Error updating appointment: " . mysqli_error($conn);
        }
    }
?>
