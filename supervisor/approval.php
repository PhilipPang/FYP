<?php

		if($row["is_approve"] == 1){
			$is_approve = "Approved";
		} elseif($row["is_approve"] == 2){
			$is_approve = "Rejected";
		} else{
			$is_approve = "Pending";
		}
	
?>