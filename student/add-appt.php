<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Appointment - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="add-appt.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#LayoutGrid1").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#ipf_appt-title").validate(
      {
         required: true,
         bootstrap: true,
         type: 'custom',
         param: /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/,
         length_max: '50',
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
         error_text: 'Please Enter A Title For The Project, Max 50'
      });
      $("#ipf_appt-desc").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_max: '255',
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
      $("#ipf_appt-datetime").validate(
      {
         required: true,
         bootstrap: true,
         type: 'custom',
         param: /(19|20)[0-9]{2}[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])/,
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
         error_text: 'Please Enter A Valid Date'
      });
   });
</script>
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
	$row6 = mysqli_fetch_array($result6)
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Make Appointment</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:51;">
               <div id="ppx_back-btn" style="display:inline-block;width:120px;height:50px;z-index:52;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:53;">
               <div id="ppx_LayoutGrid1">
                  <form name="Add_Appt" method="post" action="insert-appt.php" enctype="multipart/form-data" target="_blank" id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <label class="Lable-status" for="ipf_appt-title" id="lbl_appt-title" style="display:block;width:100%;line-height:18px;z-index:40;">Appointment Title</label>
                           <div id="ppx_ipf_appt-title" style="display:inline-block;width:100%;height:40px;z-index:41;">
                              <input type="text" id="ipf_appt-title"  name="appt_title" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="Enter Appointment Name (Max 50)">
                              <div class="invalid-feedback">Please Enter A Title For The Appointment, Max 50</div>
                           </div>
                           <hr id="HorizontalLine8" style="display:block;width:100%;z-index:42;">
                           <label class="Lable-status" for="ipf_appt-desc" id="lbl_appt-desc" style="display:block;width:100%;line-height:18px;z-index:43;">Appointment Description</label>
                           <div id="ppx_ipf_appt-desc" style="display:inline-block;width:100%;height:200px;z-index:44;">
                              <textarea name="appt_desc" id="ipf_appt-desc"  rows="9" cols="111" maxlength="255" autocomplete="off" spellcheck="false" placeholder="Enter Appointment Description (255 letter)"></textarea>
                              <div class="invalid-feedback">Please Enter The Description.</div>
                           </div>
                           <hr id="HorizontalLine10" style="display:block;width:100%;z-index:45;">
                           <label class="Lable-status" for="ipf_appt-datetime" id="lbl_appt-datetime" style="display:block;width:100%;line-height:18px;z-index:46;">Date Time</label>
                           <div id="ppx_ipf_appt-datetime" style="display:inline-block;width:100%;height:40px;z-index:47;">
                              <input type="datetime-local" id="ipf_appt-datetime"  name="appt_datetime" value="" autocomplete="off" spellcheck="false" placeholder="Select Date Time">
                              <div class="invalid-feedback">Please Enter A Valid Date</div>
                           </div>
                           <hr id="HorizontalLine11" style="display:block;width:100%;z-index:48;">
						   <input type="submit" id="btn-submit" name="" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:49;">
						</div>
                     </div>
                  </form>
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