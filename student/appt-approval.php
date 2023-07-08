<?php
	if($row6!=null){
		if($row6["is_approve"] == 1){
			$is_approve = "Approved";
		} elseif($row6["is_approve"] == 2){
			$is_approve = "Rejected";
		} else{
			$is_approve = "Pending";
		}
	}
	else{
		$is_approve = "";
	}
?>