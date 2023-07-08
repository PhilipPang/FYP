<?php
	if($row == null){
		$grade = "Not Graded";
	}else{
		if($row["project_grade"]!=null){
			$grade = $row["project_grade"];
		}else{
			$grade = "Not Graded";
		}
	}
?>