<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notification - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="notification.css" rel="stylesheet">
</head>
<body>
   <?php
	include("../src/action/conn.php");
	include("../session.php");
	$student_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM student WHERE student_ID=$student_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
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
   <div id="ppx_LayoutGrid3">
      <nav id="LayoutGrid3">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text8">
                  <p style="font-weight:bold;">STUDENT PANEL</p>
               </div>
               <div id="ppx_LayoutGrid4">
                  <div id="LayoutGrid4">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:19;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine12" style="display:block;width:100%;z-index:31;">
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:32;">
               <div id="ppx_Text9">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_LayoutGrid5">
                  <div id="LayoutGrid5">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:20;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./guideline.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Guildeline</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid6">
                  <div id="LayoutGrid6">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:21;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid7">
                  <div id="LayoutGrid7">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:22;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton4" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Proposal</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid8">
                  <div id="LayoutGrid8">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:23;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine13" style="display:block;width:100%;z-index:38;">
               <hr id="HorizontalLine10" style="display:block;width:100%;z-index:39;">
               <div id="ppx_Text10">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:24;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton8" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid10">
                  <div id="LayoutGrid10">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:27;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine15" style="display:block;width:100%;z-index:44;">
               <hr id="HorizontalLine11" style="display:block;width:100%;z-index:45;">
               <hr id="HorizontalLine14" style="display:block;width:100%;z-index:46;">
               <div id="ppx_LayoutGrid11">
                  <div id="LayoutGrid11">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:28;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="../logout.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Notification</p>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:57;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;"><span class="Lable-status">From</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Title</span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status">Message</span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text7">
                              <p style="font-weight:bold;"><span class="Lable-status">Date</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php
				function display_notification($notification_row, $supervisor_row){
			   ?>
               <div id="ppx_noti_layout">
                  <div id="noti_layout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_noti_name">
                              <p><span class="Lable-status_data_2"><?php echo $supervisor_row["supervisor_firstname"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_noti_title">
                              <p><span class="Lable-status_data_2"><?php echo $notification_row["notification_title"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_noti_message">
                              <p><span class="Lable-status_data_2"><?php echo $notification_row["notification_message"] ?></span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_noti_date">
                              <p><span class="Lable-status_data_2"><?php echo $notification_row["created_at"] ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php
				}
			   ?>
			   <?php
				$notification_SQL = "SELECT * FROM notification WHERE student_ID=".$student_ID;
				$notification_result = mysqli_query($conn, $notification_SQL);
				
				$rows = array();
				while ($row = mysqli_fetch_array($notification_result)){
					$rows[] = $row;
				}
				$rows = array_reverse($rows);
				foreach ($rows as $row) {
					$supervisor_SQL = "SELECT * FROM supervisor WHERE supervisor_ID=".$row[2];
					$supervisor_result = mysqli_query($conn, $supervisor_SQL);
					$supervisor_row = mysqli_fetch_array($supervisor_result);
					display_notification($row, $supervisor_row);
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