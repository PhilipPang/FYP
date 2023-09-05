<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Proposal - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="proposal.css" rel="stylesheet">
<!-- <script>   
   function submitsearch_form()
   {
      var regexp;
      var search_project = document.getElementById('search_project');
      if (!(search_project.disabled || search_project.style.display === 'none' || search_project.style.visibility === 'hidden'))
      {
         regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/;
         if (!regexp.test(search_project.value))
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
         if (search_project.value == "")
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
         if (search_project.value.length > 50)
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
      }
      return true;
   }
</script> -->
<?php
// include("../src/action/conn.php");
// include("../session.php");

// $sql = "SELECT * FROM proposal LIMIT 5";
// $result = mysqli_query($conn, $sql);

// // Check if the query returned any results
// if (mysqli_num_rows($result) > 0) {
//   // Loop through the results and store the data as variables
//     $row = mysqli_fetch_assoc($result);
//     $id = $row["proposal_ID"];
//     $name = $row["proposal_name"];
//     $file = $row["proposal_file"];
//     $comment = $row["proposal_comment"];
//     $date = $row["submit_date"];
//     $approve = $row["is_approve"];
//     $student = $row["student_ID"];

//     $row = mysqli_fetch_assoc($result);
//     $id1 = $row["proposal_ID"];
//     $name1 = $row["proposal_name"];
//     $file1 = $row["proposal_file"];
//     $comment1 = $row["proposal_comment"];
//     $date1 = $row["submit_date"];
//     $approve1 = $row["is_approve"];
//     $student1 = $row["student_ID"];

//     $row = mysqli_fetch_assoc($result);
//     $id3 = $row["proposal_ID"];
//     $name3 = $row["proposal_name"];
//     $file3 = $row["proposal_file"];
//     $comment3 = $row["proposal_comment"];
//     $date3 = $row["submit_date"];
//     $approve3 = $row["is_approve"];
//     $student3 = $row["student_ID"];
  
// }

// $sql2 = "SELECT supervisor_ID, supervisor_email, supervisor_password, supervisor_firstname, supervisor_lastname, supervisor_birthdate, supervisor_gender, supervisor_mobilenum, supervisor_address, supervisor_country, supervisor_ic, supervisor_register_date, is_active, supervisor_profilepic, program_ID, project_ID FROM supervisor WHERE supervisor_ID = '3'";
// $result2 = mysqli_query($conn, $sql2);

// // Check if the query returned any results
// if (mysqli_num_rows($result2) > 0) {
//   // Loop through the results and store the data as variables
//   while ($row2 = mysqli_fetch_assoc($result2)) {
//     $id2 = $row2["supervisor_ID"];
//     $email2 = $row2["supervisor_email"];
//     $password2 = $row2["supervisor_password"];
//     $firstname2 = $row2["supervisor_firstname"];
//     $lastname2 = $row2["supervisor_lastname"];
//     $birthdate2 = $row2["supervisor_birthdate"];
//     $gender2 = $row2["supervisor_gender"];
//     $mobile2 = $row2["supervisor_mobilenum"];
//     $address2 = $row2["supervisor_address"];
//     $country2 = $row2["supervisor_country"];
//     $ic2 = $row2["supervisor_ic"];
//     $register2 = $row2["supervisor_register_date"];
//     $active2 = $row2["is_active"];
//     $profile2 = $row2["supervisor_profilepic"];
//     $profram2 = $row2["program_ID"];
//     $project2 = $row2["project_ID"];
//   }
// }

	
	
	// if($row3['project_ID'] != null){
	// 	$project_ID = $row3['project_ID'];
	// 	$sql = "SELECT * FROM project WHERE project_ID=$project_ID";
	// 	$result = mysqli_query($conn,$sql);
	// 	$row = mysqli_fetch_array($result);
		
	// 	if($row['proposal_ID'] != null){
	// 		$proposal_ID = $row['proposal_ID'];
	// 		$sql4 = "SELECT * FROM proposal WHERE supervisor_ID=$supervisor_ID";
	// 		$result4 = mysqli_query($conn,$sql4);
	// 		$row4 = mysqli_fetch_array($result4);
	// 	} else{
	// 		$row4 = null;
	// 	}
	// }
	
	
   
?>
</head>
<body>
<?php
	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);

    $result = mysqli_query($conn,"SELECT proposal.proposal_ID, proposal.is_approve FROM supervisor
         JOIN project ON supervisor.project_ID = project.project_ID 
         JOIN proposal ON project.proposal_ID = proposal.proposal_ID
         JOIN student ON student.student_ID = proposal.student_ID
         WHERE supervisor.supervisor_ID = '$supervisor_ID'");

         $proposal = null;

         while ($row = mysqli_fetch_array($result)){
            $proposal = $row["proposal_ID"];
            
        }

        $student_ID = null;

        while ($row = mysqli_fetch_array($result)){
            $student_ID = $row["student_ID"];
        }


      if (isset($_GET["searchproposal"]) == True){
         $search = $_GET["searchproposal"];
     }
     else{
         $search = null;
     }

     
   ?>
   <?php
   if (isset($_GET["searchrproposal"]) == True){
      $search = $_GET["searchproposal"];
  }
  else{
      $search = null;
  }

  $count = mysqli_query($conn,"SELECT * FROM proposal WHERE proposal_ID LIKE '%$search%'");
  $mycount = mysqli_num_rows($count);
  ?>
   

   <div id="ppx_Dash-Head">
      <header id="Dash-Head">
         <div class="row">
            <div class="col-1">
               <div id="ppx_logo" style="display:inline-block;width:100%;height:auto;z-index:0;">
                  <img src="images/Logo-w.png" id="logo" alt="" width="210" height="60">
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_header-grid">
                  <div id="header-grid">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_user-profile_picture" style="display:inline-block;width:50px;height:50px;z-index:1;position:relative;">
                              <img src="data:image;base64,<?php echo $row3['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row3['supervisor_firstname']?> <?php echo $row3['supervisor_lastname']?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_layout-date">
                              <div id="layout-date">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_JavaScript2" style="display:inline-block;width:100%;z-index:3;">
                                          <div style="color:#6A707E;font-size:16px;font-family:Arial;font-weight:bold;font-style:normal;text-align:left;text-decoration:none" id="basicdate"></div>
                                          <script>                                          
                                             var now = new Date();
                                             var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
                                             var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
                                             var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();
                                             var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();
                                             today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;
                                             var basicdate = document.getElementById('basicdate');
                                             basicdate.innerHTML = today;
                                          </script>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>
   <div id="ppx_content">
      <nav id="content">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text1">
                  <p style="font-weight:bold;">SUPERVISOR PANEL</p>
               </div>
               <div id="ppx_btn-profile">
                  <div id="btn-profile">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:11;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine4" style="display:block;width:100%;z-index:22;">
               <hr id="HorizontalLine1" style="display:block;width:100%;z-index:23;">
               <div id="ppx_Text2">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_btn-project">
                  <div id="btn-project">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:12;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-progress">
                  <div id="btn-progress">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:13;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-proposal">
                  <div id="btn-proposal">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:14;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton4" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Proposal</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-submission">
                  <div id="btn-submission">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:15;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./submission.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Submission</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine5" style="display:block;width:100%;z-index:29;">
               <hr id="HorizontalLine2" style="display:block;width:100%;z-index:30;">
               <div id="ppx_Text3">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton9" style="display:inline-block;width:100%;height:50px;z-index:16;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton9" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-student">
                  <div id="btn-student">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:17;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./my-student.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>My Student</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-notification">
                  <div id="btn-notification">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:18;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine7" style="display:block;width:100%;z-index:35;">
               <hr id="HorizontalLine3" style="display:block;width:100%;z-index:36;">
               <hr id="HorizontalLine6" style="display:block;width:100%;z-index:37;">
               <div id="ppx_btn-logout">
                  <div id="btn-logout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:19;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton8" href="" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Student Proposal</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:54;">
               <div id="ppx_LayoutGrid3">
                  <form name="search_form" method="post" action="proposal.php" enctype="multipart/form-data" id="LayoutGrid3" onsubmit="return submitsearch_form()">
                     <div class="row">
                        <div class="col-1">
                           <input type="text" value="<?php echo $search ?>" id="search_project" style="display:block;width:100%;height:40px;z-index:39;" name="searchproposal" maxlength="50" autocomplete="off" spellcheck="false" placeholder="search">
                        </div>
                        <div class="col-2">
                           <div id="ppx_enter-btn" style="display:inline-block;width:67px;height:40px;z-index:40;">
                           <input class="ui-button ui-corner-all" type="submit" value="Enter" id="enter-btn" style="width:100%;height:100%;">
                           </div>
                        </div>
                        <div class="col-3">
                        </div>
                     </div>
                  </form>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:56;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;"><span class="Lable-status">Pro</span><span class="Lable-status">posal </span><span class="Lable-status">ID</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Project Name</span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status">Student Name</span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text8">
                              <p style="font-weight:bold;"><span class="Lable-status">Status</span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_Text9">
                              <p style="font-weight:bold;"><span class="Lable-status">Submit</span><span class="Lable-status"> Date</span></p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div id="ppx_Text7">
                              <p style="font-weight:bold;"><span class="Lable-status">Action</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php


   $sql = mysqli_query($conn, "SELECT supervisor.supervisor_firstname, supervisor.supervisor_lastname,
    proposal.proposal_ID, proposal.proposal_name, proposal.is_approve, student.student_firstname, student.student_lastname,
    proposal.submit_date FROM proposal
    JOIN student ON student.student_ID = proposal.student_ID
    JOIN supervisor ON student.supervisor_ID = supervisor.supervisor_ID
    JOIN project ON supervisor.project_ID = project.project_ID
    WHERE supervisor.supervisor_ID = '$supervisor_ID'
    ORDER BY proposal_ID ASC");

              
              while ($row = mysqli_fetch_assoc($sql)){
               if($row["is_approve"] == 1){
                  $is_approve = "Approved";
               } elseif($row["is_approve"] == 0){
                  $is_approve = "Reject";
               }
                 echo '<div id="ppx_project_layout">
                 <form name="looping_form" method="post" action="looping-form.php" enctype="application/x-www-form-urlencoded" target="_blank" id="project_layout">
                    <div class="row">
                       <div class="col-1">
                          <div id="ppx_data-proposal-id">
                             <p><span class="Lable-status_data_2">' . $row["proposal_ID"] . '</span></p>
                          </div>
                       </div>
                       <div class="col-2">
                          <div id="ppx_data-project-name">
                             <p><span class="Lable-status_data_2">'. $row["proposal_name"] .'</span></p>
                          </div>
                       </div>2
                       <div class="col-3">
                          <div id="ppx_data-stu-name">
                             <p><span class="Lable-status_data_2"> '. $row["student_lastname"] .'</span></p>
                          </div>
                       </div>
                       <div class="col-4">
                          <div id="ppx_data-status">
                             <p><span class="Lable-status_data_2">'. $is_approve .'</span></p>
                          </div>
                       </div>
                       <div class="col-5">
                          <div id="ppx_data-date">
                             <p><span class="Lable-status_data_2">'. $row["submit_date"] .'</span></p>
                          </div>
                       </div>
                       <div class="col-6">
                          <div id="ppx_btn-view" style="display:inline-block;width:100%;height:18px;z-index:52;">
                             <a class="ui-button ui-corner-all" id="btn-view" href="./view-proposal.php?
                             proposal_ID='. $row["proposal_ID"].'
                             
                             &proposal_name='. $row["proposal_name"].' " style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>View</a>
                          </div>
                       </div>
                    </div>
                   
                 </form>
                 
              </div> ';
              }
              ?>
              <?php
			// 	$proposal_sql = "SELECT * FROM proposal WHERE proposal_ID=$proposal_ID";
         //    if (isset($_GET["searchproposal"])){

         //       $proposal_ID = $_GET["searchproposal"];
         //    }else {
         //       $proposal_ID = null;
         //    }
         //    $sql = "SELECT * FROM proposal WHERE proposal_ID = $proposal_ID";
         //    if ($proposal_ID === null){
         //       $proposal_result = mysqli_query($conn,$proposal_sql);

         //    while ($proposal_row = mysqli_fetch_array($proposal_result)){
                  
               
         //       display_student($student_row);
         //    }
         // }else {
         //    $student_result = mysqli_query($conn,$sql);

         //    while ($student_row = mysqli_fetch_array($student_result)){
                  
               
         //       display_student($student_row);
         //    }
         // }
			   ?>
              

               <!-- <div id="ppx_project_layout">
                  <form name="looping_form" method="post" action="looping-form.php" enctype="application/x-www-form-urlencoded" target="_blank" id="project_layout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_data-proposal-id">
                              <p><span class="Lable-status_data_2">?php echo $row["proposal_ID"]; ?></span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_data-project-name">
                              <p><span class="Lable-status_data_2">?php echo $row["proposal_name"]; ?></span></p>
                           </div>
                        </div>2
                        <div class="col-3">
                           <div id="ppx_data-stu-name">
                              <p><span class="Lable-status_data_2"> cho $row["student_lastname"]; ?></span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_data-status">
                              <p><span class="Lable-status_data_2">Active</span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_data-date">
                              <p><span class="Lable-status_data_2"></span></p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div id="ppx_btn-view" style="display:inline-block;width:100%;height:18px;z-index:52;">
                              <a class="ui-button ui-corner-all" id="btn-view" href="./view-proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>View</a>
                           </div>
                        </div>
                     </div>
                    
                  </form>
                  
               </div> -->

               
         
            </div>
         </div>
      </nav>
   </div>
   <div id="ppx_footer">
      <footer id="footer">
         <div class="row">
            <div class="col-1">
               <div id="ppx_copyright">
                  <p>2023 Copyrights © ProjectPlannerX for Asia Pacific University SDP Assignment</p>
               </div>
            </div>
         </div>
      </footer>
   </div>
</body>
</html>