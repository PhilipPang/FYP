<?php
	if($row3!=null){
		if($row3["is_approve"] == 1){
			$is_approve = "Approved";
		} elseif($row3["is_approve"] == 2){
			$is_approve = "Rejected";
		} else{
			$is_approve = "Pending";
		}
	}
	else{
		$is_approve = "";
	}
?>