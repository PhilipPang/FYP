<?php
	if($row4!=null){
		if($row4["is_approve"] == 1){
			$is_approve = "Approved";
		} elseif($row4["is_approve"] == 2){
			$is_approve = "Rejected";
		} else{
			$is_approve = "Pending";
		}
	}
	else{
		$is_approve = "";
	}
?>