<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Submission - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="view-submission.css" rel="stylesheet">
<script src="jquery-3.6.4.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#LayoutGrid3").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#project-desc").validate(
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
      $("#ipf_project_grade").validate(
      {
         required: true,
         bootstrap: true,
         type: 'number',
         expr_min: '',
         expr_max: '',
         value_min: '',
         value_max: '',
         length_min: '1',
         length_max: '3',
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
         error_text: 'Please give a mark for this project (1-100)'
      });
   });
</script>
<?php
include("read-submit.php");
include("proposal-approval.php");
?>
</head>
<body>
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
                              <img src="data:image;base64,<?php echo $row['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row['supervisor_firstname']?> <?php echo $row['supervisor_lastname']?></p>
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; View Submission</p>
               </div>
               <hr id="HorizontalLine10" style="display:block;width:100%;z-index:60;">
               <div id="ppx_back-btn" style="display:inline-block;width:120px;height:50px;z-index:61;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./submission.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_lable-student-id">
                              <p style="font-weight:bold;">Student ID</p>
                           </div>
                           <div id="ppx_data-student-id">
                              <p><?php echo $row2["student_ID"] ?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;">Student Name</p>
                           </div>
                           <div id="ppx_data-student-name">
                              <p><?php echo $row2["student_firstname"] ?><?php echo $row2["student_lastname"] ?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;">Student Program</p>
                           </div>
                           <div id="ppx_data-student-program">
                              <p><?php echo $row4["program_name"] ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid2">
                  <div id="LayoutGrid2">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text8">
                              <p style="font-weight:bold;">Project ID</p>
                           </div>
                           <div id="ppx_data-project-id">
                              <p><?php {echo $_GET["project_ID"];} ?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text10">
                              <p style="font-weight:bold;">Project Name</p>
                           </div>
                           <div id="ppx_data-project-name">
                              <p><?php {echo $_GET["project_name"];} ?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text12">
                              <p style="font-weight:bold;">Proposal Status</p>
                           </div>
                           <div id="ppx_data-proposal-status">
                              <p><?php echo $is_approve; ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:64;">
               <div id="ppx_LayoutGrid4">
                  <div id="LayoutGrid4">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Download_file_btn" style="display:inline-block;width:200px;height:50px;z-index:51;">
                              <a class="ui-button ui-corner-all" id="Download_file_btn" href="<?php if($row3 != null){echo $row3["project_files"];} ?>" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Download Files</a>
                           </div>
                        </div>
                        <div class="col-2">
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid3">
                  <form name="grade_submission" method="post" action="update-submission.php" enctype="multipart/form-data" target="_blank" id="LayoutGrid3">
                  <input type="hidden" id="project_ID" name="project_ID" value="<?php echo $project_ID ?>">
                     <div class="row">
                        <div class="col-1">
                           <label class="Lable-status" for="ipf_project_grade" id="lbl_project_grade" style="display:block;width:100%;line-height:18px;z-index:52;">Project Grade</label>
                           <div id="ppx_ipf_project_grade" style="display:inline-block;width:100%;height:40px;z-index:53;">
                              <input type="number" id="ipf_project_grade"  name="project_grade" value="" maxlength="3" autocomplete="off" spellcheck="false" placeholder="Enter the project mark">
                              <div class="invalid-feedback">Please give a mark for this project (1-100)</div>
                           </div>
                           <hr id="HorizontalLine9" style="display:block;width:100%;z-index:54;">
                           <label class="Lable-status" for="project-desc" id="lbl_desc" style="display:block;width:100%;line-height:18px;z-index:55;">Description</label>
                           <div id="ppx_project-desc" style="display:inline-block;width:100%;height:200px;z-index:56;">
                              <textarea name="project_desc" id="project-desc"  rows="9" cols="111" autocomplete="off" spellcheck="false" placeholder="Enter Project Description"></textarea>
                              <div class="invalid-feedback">Please Enter The Description.</div>
                           </div>
                           <hr id="HorizontalLine8" style="display:block;width:100%;z-index:57;">
                           <input type="submit" id="btn-submit" name="" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:58;">
                        </div>
                     </div>
                  </form>
               </div>
               <?php
               $project_ID = $_GET['project_ID'];
    
               $sql = "SELECT * FROM project WHERE supervisor_ID=$supervisor_ID AND program_ID=$program_ID AND project_ID=$project_ID" ;
               $result = mysqli_query($conn, $sql);
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