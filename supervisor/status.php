<?php
	// if($row3 == null){
	// 	$proposal_status = "No-Record";
	// } else{
	// 	$proposal_status = "Submitted";
	// }
	
	if($row3 == null){
	 	$project_status = "No-Record";
	 } else{
	 	if($row3["project_files"]!=null){
	 		$project_status = "Submitted";
	 	} else{
	 		$project_status = "No-Record";
	 	}
	 }
?>