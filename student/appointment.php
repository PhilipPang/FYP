<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Appointment - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="appointment.css" rel="stylesheet">
</head>
<body>
   <?php
	include("../src/action/conn.php");
	include("../session.php");
	$student_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM student WHERE student_ID=$student_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
	
	$sql6 = "SELECT * FROM appointment WHERE student_ID=$student_ID";
	$result6 = mysqli_query($conn,$sql6);
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
                              <img src="data:image;base64,<?php echo $row3['student_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row3['student_firstname']?> <?php echo $row3['student_lastname']?></p>
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
   <div id="ppx_LayoutGrid2">
      <nav id="LayoutGrid2">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text1">
                  <p style="font-weight:bold;">STUDENT PANEL</p>
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
               <hr id="HorizontalLine4" style="display:block;width:100%;z-index:23;">
               <hr id="HorizontalLine1" style="display:block;width:100%;z-index:24;">
               <div id="ppx_Text2">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_btn-guideline">
                  <div id="btn-guideline">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:12;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./guideline.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Guildeline</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-project">
                  <div id="btn-project">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:13;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
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
               <div id="ppx_btn-progress">
                  <div id="btn-progress">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:15;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine5" style="display:block;width:100%;z-index:30;">
               <hr id="HorizontalLine2" style="display:block;width:100%;z-index:31;">
               <div id="ppx_Text3">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-chat">
                  <div id="btn-chat">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Icon6" style="display:inline-block;width:22px;height:25px;text-align:center;z-index:16;">
                              <div id="Icon6"><i class="fa fa-commenting"></i></div>
                           </div>
                        </div>
                        <div class="col-2">
                           <label for="" id="Label6" style="display:block;width:100%;line-height:19px;z-index:17;">Chat</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:19;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton8" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-notification">
                  <div id="btn-notification">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:18;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine7" style="display:block;width:100%;z-index:36;">
               <hr id="HorizontalLine3" style="display:block;width:100%;z-index:37;">
               <hr id="HorizontalLine6" style="display:block;width:100%;z-index:38;">
               <div id="ppx_btn-logout">
                  <div id="btn-logout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:20;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="../logout.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Appointment</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:53;">
               <div id="ppx_btn-add-progject" style="display:inline-block;width:226px;height:50px;z-index:54;">
                  <a class="ui-button ui-corner-all" id="btn-add-progject" href="./add-appt.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Make Appointment</a>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:55;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;"><span class="Lable-status">Appointment ID</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Supervisor Name</span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status">Title</span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text8">
                              <p style="font-weight:bold;"><span class="Lable-status">Status</span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_Text9">
                              <p style="font-weight:bold;"><span class="Lable-status">Date Time</span></p>
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
				function display_appointment($appointment_row, $supervisor_row, $is_approve){
			   ?>
			   <div id="ppx_project_layout">
                  <form name="looping_form" method="post" action="edit-appt.php" enctype="multipart/form-data" target="_blank" id="project_layout">
                     <div class="row">
                        <input type="hidden" id="appointment_ID" name="appointment_ID" value="<?php echo $appointment_row["appointment_ID"] ?>">
						<div class="col-1">
                           <div id="ppx_data-proposal-id">
                              <p><span class="Lable-status_data_2"><?php echo $appointment_row["appointment_ID"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_data-project-name">
                              <p style="font-size:13px;line-height:16px;"><span class="Lable-status_data_2"><?php echo $supervisor_row["supervisor_firstname"] ?> <?php echo $supervisor_row["supervisor_lastname"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_data-title">
                              <p><span class="Lable-status_data_2"><?php echo $appointment_row["appointment_data"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_data-status">
                              <p><span class="Lable-status_data_2"><?php echo $is_approve ?></span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_data-date">
                              <p><span class="Lable-status_data_2"><?php echo $appointment_row["appointment_datetime"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div id="ppx_btn-view" style="display:inline-block;width:100%;height:18px;z-index:51;">
							  <input class="ui-button ui-corner-all" type="submit" id="btn-view" name="" value="Edit" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>
						   </div>
                        </div>
                     </div>
                  </form>
               </div>
			   <?php
				}
			   ?>
			   <?php
				while($row6 = mysqli_fetch_array($result6)){
					include("appt-approval.php");
					$supervisor_ID = $row6['supervisor_ID'];
					$supervisor_sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
					$supervisor_result = mysqli_query($conn,$supervisor_sql);
					$supervisor_row = mysqli_fetch_array($supervisor_result);
					display_appointment($row6, $supervisor_row, $is_approve);
				}
			   ?>
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