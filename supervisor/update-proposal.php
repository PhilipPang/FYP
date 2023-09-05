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
    

        $proposalID = $_POST['proposal_ID'];


        $sql = "UPDATE proposal SET
            proposal_comment = '$_POST[project_desc]',
            is_approve = '$flipValue'
            WHERE proposal_ID = $proposalID";

        if (mysqli_query($conn,$sql)){
            mysqli_close($conn);
            echo '<script>alert("Proposal Changed!");
                    window.location.href = "proposal.php";
                    </script>';
        } else {
            echo "Error updating appointment: " . mysqli_error($conn);
        }
    } else {
        if ($_POST['flip'] == 0) {
            $flipValue = 0;
        }

        $proposalID2 = $_POST['proposal_ID'];


        $sql2 = "UPDATE proposal SET
            proposal_comment = '$_POST[project_desc]',
            is_approve = '$flipValue'
            WHERE proposal_ID = $proposalID2";

        if (mysqli_query($conn,$sql2)){
            mysqli_close($conn);
            echo '<script>alert("Proposal Changed!");
                    window.location.href = "proposal.php";
                    </script>';
        } else {
            echo "Error updating appointment: " . mysqli_error($conn);
        }
    }



?>
