<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="project.css" rel="stylesheet">
</head>
<body>
   <?php
	include("../src/action/conn.php");
	include("../session.php");
	$student_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM student WHERE student_ID=$student_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
	
	if($row3['project_ID'] != null){
		$project_ID = $row3['project_ID'];
		$sql = "SELECT * FROM project WHERE project_ID=$project_ID";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		
		if($row['proposal_ID'] != null){
			$proposal_ID = $row['proposal_ID'];
			$sql4 = "SELECT * FROM proposal WHERE student_ID=$student_ID";
			$result4 = mysqli_query($conn,$sql4);
			$row4 = mysqli_fetch_array($result4);
		} else{
			$row4 = null;
		}
	} else{
		$row = null;
		$row4 = null;
	}
	
	include("status.php");
	include("grade.php");
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
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:18;">
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
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:19;">
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Project Detail</p>
               </div>
               <div id="ppx_project_name">
                  <h2><?php if($row!=null){echo $row["project_name"];} ?></h2><br/>
               </div>
               <div id="ppx_project_description">
                  <p><?php if($row!=null){echo $row["project_description"];} ?></p>
               </div>
               <div id="ppx_Text4">
                  <h6>Project Status</h6><br/>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:60;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Start Date</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_start_date">
                              <p style="font-weight:bold;"><span class="Lable-status_data"><?php if($row!=null){echo $row["project_start_date"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:62;">
               <div id="ppx_LayoutGrid3">
                  <div id="LayoutGrid3">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text7">
                              <p style="font-weight:bold;"><span class="Lable-status">Due</span><span class="Lable-status"> Date</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_end_date">
                              <p style="font-size:13px;line-height:16px;"><span class="Lable-status_data"><?php if($row!=null){echo $row["project_end_date"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine10" style="display:block;width:100%;z-index:64;">
               <div id="ppx_LayoutGrid4">
                  <div id="LayoutGrid4">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text9">
                              <p style="font-weight:bold;"><span class="Lable-status">Presentation Date</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_present_date">
                              <p style="font-size:13px;line-height:16px;"><span class="Lable-status_data"><?php if($row!=null){echo $row["project_present_date"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine11" style="display:block;width:100%;z-index:66;">
               <div id="ppx_LayoutGrid5">
                  <div id="LayoutGrid5">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text11">
                              <p style="font-weight:bold;"><span class="Lable-status">Proposal Status</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_proposal_status">
                              <p style="font-weight:bold;"><span class="Lable-status_data"><?php echo $proposal_status ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine12" style="display:block;width:100%;z-index:68;">
               <div id="ppx_LayoutGrid6">
                  <div id="LayoutGrid6">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text13">
                              <p style="font-weight:bold;"><span class="Lable-status">Submission Status</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_files">
                              <p style="font-weight:bold;"><span class="Lable-status_data"><?php echo $project_status ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine13" style="display:block;width:100%;z-index:70;">
               <div id="ppx_LayoutGrid7">
                  <div id="LayoutGrid7">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text15">
                              <p style="font-weight:bold;"><span class="Lable-status">Grade CGPA</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status_data"><?php if($row!=null){echo $row["project_grade"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine14" style="display:block;width:100%;z-index:72;">
               <div id="ppx_LayoutGrid8">
                  <div id="LayoutGrid8">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text17">
                              <p style="font-weight:bold;"><span class="Lable-status">Last Modify</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_submit_date">
                              <p style="font-weight:bold;"><span class="Lable-status_data"><?php if($row!=null){echo $row["project_submit_date"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine15" style="display:block;width:100%;z-index:74;">
               <div id="ppx_LayoutGrid9">
                  <div id="LayoutGrid9">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text19">
                              <p style="font-weight:bold;"><span class="Lable-status">Submission Comment</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_project_submit_comment">
                              <p><span class="Lable-status_data_2"><?php if($row!=null){echo $row["project_submit_comment"];} ?></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:76;">
               <hr id="HorizontalLine17" style="display:block;width:100%;z-index:77;">
               <div id="ppx_add-submission" style="display:inline-block;width:200px;height:50px;z-index:78;">
                  <a class="ui-button ui-corner-all" id="add-submission" href="./project-upload.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Add Submission</a>
               </div>
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