<?php
try{
        include("conn.php");
        $id = intval($_GET['id']);

        $sql="DELETE FROM admin WHERE admin_ID=$id";
        $result = mysqli_query($con, $sql);

        if ($result){
            mysqli_close($con);
        }
        else {
            echo "<script> alert('Failed to delete this record! Please Retry');</script>";
            mysqli_close($con);
            }
        }
    catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
    }
?>