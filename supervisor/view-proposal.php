<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Proposal - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="view-proposal.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="wb.validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#LayoutGrid2").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#ipf_desc").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         color_text: '#000000',
         color_hint: '#00FF00',
         color_error: '#FF0000',
         color_border: '#808080',
         nohint: false,
         font_family: 'Arial',
         font_size: '13px',
         position: 'topleft',
         offsetx: 0,
         offsety: 0,
         effect: 'none',
         error_text: 'Please Enter The Description.'
      });
   });
</script>
<?php

// include("../src/action/conn.php");


// $sql = "SELECT * FROM proposal WHERE proposal_ID = '1'";
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

	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
	
	if($row3['project_ID'] != null){
		$project_ID = $row3['project_ID'];
		$sql = "SELECT * FROM project WHERE project_ID=$project_ID";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		
		if($row['proposal_ID'] != null){
			$proposal_ID = $row['proposal_ID'];
			$sql4 = "SELECT * FROM proposal WHERE proposal_ID=$proposal_ID";
			$result4 = mysqli_query($conn,$sql4);
			$row4 = mysqli_fetch_array($result4);
		} else{
			$row4 = null;
		}
	} else{
		$row = null;
		$row4 = null;
	}
	
	
	
   
?> 
</head>
<body>
   <div id="wb_Dash-Head">
      <header id="Dash-Head">
         <div class="row">
            <div class="col-1">
               <div id="wb_logo" style="display:inline-block;width:100%;height:auto;z-index:0;">
                  <img src="images/Logo-w.png" id="logo" alt="" width="210" height="60">
               </div>
            </div>
            <div class="col-2">
               <div id="wb_header-grid">
                  <div id="header-grid">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_user-profile_picture" style="display:inline-block;width:50px;height:50px;z-index:1;position:relative;">
                              <img src="data:image;base64,<?php echo $row3['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row3['supervisor_firstname']?> <?php echo $row3['supervisor_lastname']?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="wb_layout-date">
                              <div id="layout-date">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="wb_JavaScript2" style="display:inline-block;width:100%;z-index:3;">
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
   <div id="wb_content">
      <nav id="content">
         <div class="row">
            <div class="col-1">
               <div id="wb_Text1">
                  <p style="font-weight:bold;">SUPERVISOR PANEL</p>
               </div>
               <div id="wb_btn-profile">
                  <div id="btn-profile">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:11;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine4" style="display:block;width:100%;z-index:22;">
               <hr id="HorizontalLine1" style="display:block;width:100%;z-index:23;">
               <div id="wb_Text2">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="wb_btn-project">
                  <div id="btn-project">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:12;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_btn-progress">
                  <div id="btn-progress">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:13;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_btn-proposal">
                  <div id="btn-proposal">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:14;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton4" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Proposal</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_btn-submission">
                  <div id="btn-submission">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:15;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./submission.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Submission</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine5" style="display:block;width:100%;z-index:29;">
               <hr id="HorizontalLine2" style="display:block;width:100%;z-index:30;">
               <div id="wb_Text3">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="wb_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton9" style="display:inline-block;width:100%;height:50px;z-index:16;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton9" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_btn-student">
                  <div id="btn-student">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:17;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./my-student.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>My Student</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_btn-notification">
                  <div id="btn-notification">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:18;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine7" style="display:block;width:100%;z-index:35;">
               <hr id="HorizontalLine3" style="display:block;width:100%;z-index:36;">
               <hr id="HorizontalLine6" style="display:block;width:100%;z-index:37;">
               <div id="wb_btn-logout">
                  <div id="btn-logout">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:19;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton8" href="" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="wb_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; View Proposal</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:54;">
               <div id="wb_back-btn" style="display:inline-block;width:120px;height:50px;z-index:55;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <div id="wb_LayoutGrid2">
                  <form name="view_proposal" method="post" action="update-proposal.php" enctype="multipart/form-data" target="_blank" id="LayoutGrid2">
                  <input type="hidden" id="proposal_ID" name="proposal_ID" value="<?php echo $row4['proposal_ID']?>">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_LayoutGrid1">
                              <div id="LayoutGrid1">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="wb_lable-student-id">
                                          <p style="font-weight:bold;">Proposal ID</p>
                                       </div>
                                       <div id="wb_data-proposal-id">
                                          <p><?php {echo $_GET["proposal_ID"];} ?></p>
                                       </div>
                                    </div>
                                    <div class="col-2">
                                       <div id="wb_Text4">
                                          <p style="font-weight:bold;">Proposal Name</p>
                                       </div>
                                       <div id="wb_data-proposal-name">
                                          <p><?php {echo $_GET["proposal_name"];} ?></p>
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <hr id="HorizontalLine8" style="display:block;width:100%;z-index:43;">
                                       <div id="wb_Download_file_btn" style="display:inline-block;width:200px;height:50px;z-index:44;">
                                          <a class="ui-button ui-corner-all" id="Download_file_btn" href="<?php if($row4 != null){echo $row4["proposal_file"];} ?>"  style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Download Files</a>
                                       </div>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine9" style="display:block;width:100%;z-index:46;">
                           <label class="Lable-status" for="ipf_desc" id="lbl_desc" style="display:block;width:100%;line-height:18px;z-index:47;">Proposal Comment</label>
                           <div id="wb_ipf_desc" style="display:inline-block;width:100%;height:200px;z-index:48;">
                              <textarea name="project_desc" id="ipf_desc"  rows="9" cols="111" autocomplete="off" spellcheck="false" placeholder="Write a comment for this proposal"></textarea>
                              <div class="invalid-feedback">Please Enter The Description.</div>
                           </div>
                           <hr id="HorizontalLine10" style="display:block;width:100%;z-index:49;">
                           <div id="wb_flip-switch" style="display:inline-block;width:114px;height:34px;z-index:50;">
                              <input type="checkbox" role="switch" name="flip" id="flip-switch" value="1" checked>
                              <label id="flip-switch-label" for="flip-switch">
                                 <span id="flip-switch-inner"></span>
                                 <span id="flip-switch-switch"></span>
                              </label>
                           </div>
                           <hr id="HorizontalLine11" style="display:block;width:100%;z-index:51;">
                           <input type="submit" id="btn-submit" name="" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:52;">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </nav>
   </div>
   <div id="wb_footer">
      <footer id="footer">
         <div class="row">
            <div class="col-1">
               <div id="wb_copyright">
                  <p>2023 Copyrights © ProjectPlannerX for Asia Pacific University SDP Assignment</p>
               </div>
            </div>
         </div>
      </footer>
   </div>
</body>
</html>