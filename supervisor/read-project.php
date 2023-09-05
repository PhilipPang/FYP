 <?php 
    include("../session.php");
	include("../src/action/conn.php");
	$supervisor_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

	if ($row['project_ID']!=null){
		$project_ID = $row['project_ID'];
	    $sql2 = "SELECT * FROM project WHERE project_ID=$project_ID";
		$result2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_array($result2);
	}
	else{
		$row2 = null;
	}

?>