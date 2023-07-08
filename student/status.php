<?php
	if($row4 == null){
		$proposal_status = "No-Record";
	} else{
		$proposal_status = "Submitted";
	}
	
	if($row == null){
		$project_status = "No-Record";
	} else{
		if($row["project_files"]!=null){
			$project_status = "Submitted";
		} else{
			$project_status = "No-Record";
		}
	}
?>