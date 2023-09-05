<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View appointment - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="view-appt.css" rel="stylesheet">
<?php

include("read-appointment.php");
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
                              <img src="data:image;base64,<?php echo $row2['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row2['supervisor_firstname']?> <?php echo $row2['supervisor_lastname']?></p>
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
                              <a class="ui-button ui-corner-all" id="ThemeableButton9" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Appointment</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:47;">
               <div id="wb_back-btn" style="display:inline-block;width:120px;height:50px;z-index:48;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:49;">
               <div id="wb_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_lable-student-name">
                              <p style="font-weight:bold;">Student Name</p>
                           </div>
                           <div id="wb_data-student-name">
                            <?php echo $row["student_firstname"] ?><?php echo $row["student_lastname"] ?>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="wb_lable-appt-datetime">
                              <p style="font-weight:bold;">Appointment Date Time</p>
                           </div>
                           <div id="wb_data-appt-datetime">
                           <?php {echo $_GET["appointment_datetime"];} ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wb_lbl-appt-title">
                  <p style="font-weight:bold;">Appointment Title</p>
               </div>
               <div id="wb_data-appt-title">
               <?php {echo $_GET["appointment_data"];} ?>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:53;">
               <div id="wb_lbl-appt-desc">
                  <p style="font-weight:bold;">Appointment Description</p>
               </div>
               <div id="wb_data-appt-desc">
               <p><?php echo $row3["appointment_description"] ?></p>
               </div>
               <hr id="HorizontalLine10" style="display:block;width:100%;z-index:56;">
               <div id="wb_approve-reject-form">
                  <form name="Appointment_Form" method="post" action="update-appointment.php" enctype="multipart/form-data" target="_blank" id="approve-reject-form">
                  <input type="hidden" id="appointment_ID" name="appointment_ID" value="<?php echo $row3['appointment_ID']?>">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_flip-switch" style="display:inline-block;width:114px;height:34px;z-index:43;">
                              <input type="checkbox" role="switch" name="flip" id="flip-switch" value="1" checked>
                              <label id="flip-switch-label" for="flip-switch">
                                 <span id="flip-switch-inner"></span>
                                 <span id="flip-switch-switch"></span>
                              </label>
                           </div>
                           <hr id="HorizontalLine11" style="display:block;width:100%;z-index:44;">
                           <input type="submit" id="btn-submit" name="" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:45;">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <?php
               $appointment_ID = $_GET['appointment_ID'];
               $student_ID = $row['student_ID'];
               $sql = "SELECT * FROM appointment WHERE appointment_ID=$appointment_ID AND supervisor_ID=$supervisor_ID AND student_ID=$student_ID" ;
               $result = mysqli_query($conn, $sql);

             
               ?>
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