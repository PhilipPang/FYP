<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Proposal Upload - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="proposal-upload.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#acc-detail-row6").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#proposal-name").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
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
         error_text: 'Please enter a proposal name'
      });
      $("#proposal-upload :file").on('change', function()
      {
         var input = $(this).parents('.input-group').find(':text');
         input.val($(this).val());
         input.blur();
      });
      $("#proposal-upload .form-control").validate(
      {
         required: true,
         bootstrap: true,
         type: 'custom',
         param: /([^\/\\]+)\.(doc|docx|pdf|zip)$/i,
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
         error_text: 'Please upload your proposal'
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
	
	if($row3['project_ID'] != null){
		$project_ID = $row3['project_ID'];
		$sql = "SELECT * FROM project WHERE project_ID=$project_ID";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
	} else{
		$row = null;
	}
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
   <div id="ppx_LayoutGrid1">
      <nav id="LayoutGrid1">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text5">
                  <p style="font-weight:bold;">STUDENT PANEL</p>
               </div>
               <div id="ppx_LayoutGrid7">
                  <div id="LayoutGrid7">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:17;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:29;">
               <hr id="HorizontalLine11" style="display:block;width:100%;z-index:30;">
               <div id="ppx_Text14">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_LayoutGrid8">
                  <div id="LayoutGrid8">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:18;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./guideline.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Guildeline</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid9">
                  <div id="LayoutGrid9">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:19;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid10">
                  <div id="LayoutGrid10">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:20;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton4" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Proposal</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid11">
                  <div id="LayoutGrid11">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:21;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine18" style="display:block;width:100%;z-index:36;">
               <hr id="HorizontalLine14" style="display:block;width:100%;z-index:37;">
               <div id="ppx_Text15">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_LayoutGrid12">
                  <div id="LayoutGrid12">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Icon9" style="display:inline-block;width:22px;height:25px;text-align:center;z-index:22;">
                              <div id="Icon9"><i class="fa fa-commenting"></i></div>
                           </div>
                        </div>
                        <div class="col-2">
                           <label for="" id="Label9" style="display:block;width:100%;line-height:19px;z-index:23;">Chat</label>
                        </div>
                     </div>
                  </div>
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
               <div id="ppx_LayoutGrid13">
                  <div id="LayoutGrid13">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:25;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine20" style="display:block;width:100%;z-index:42;">
               <hr id="HorizontalLine15" style="display:block;width:100%;z-index:43;">
               <hr id="HorizontalLine19" style="display:block;width:100%;z-index:44;">
               <div id="ppx_LayoutGrid14">
                  <div id="LayoutGrid14">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:26;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="../logout.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Proposal Submission</p>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:53;">
               <div id="ppx_back-btn" style="display:inline-block;width:120px;height:50px;z-index:54;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./proposal.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:55;">
               <div id="ppx_Text4">
                  <p style="font-weight:bold;">File Submission</p>
               </div>
               <div id="ppx_acc-detail-row6">
                  <form name="proposal_submit" method="post" action="proposal-submit.php" enctype="multipart/form-data" target="_blank" id="acc-detail-row6">
                     <div class="row">
                        <div class="col-1">
                           <label for="proposal-name" id="lable-proposal-name" style="display:block;width:100%;line-height:21px;z-index:46;">Proposal Name</label>
                           <div id="ppx_proposal-name" style="display:inline-block;width:100%;height:40px;z-index:47;">
                              <input type="text" id="proposal-name"  name="proposal_name" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="Example (Max 50)">
                              <div class="invalid-feedback">Please enter a proposal name</div>
                           </div>
                           <hr id="HorizontalLine10" style="display:block;width:100%;z-index:48;">
                           <div id="ppx_proposal-upload" style="display:inline-block;width:100%;z-index:49;">
                              <div id="proposal-upload" class="input-group">
                                 <input class="form-control" type="text" readonly id="proposal-upload-input" placeholder="Upload your proposal">
                                 <label class="input-group-btn">
                                    <input type="file" accept=".doc,.docx,.pdf,.zip" name="proposal_upload" id="proposal-upload-file" style="display:none;" multiple><span class="btn">Browse...</span>
                                 </label>
                                 <div class="invalid-feedback">Please upload your proposal</div></div>
                           </div>
                           <hr id="HorizontalLine1" style="display:block;width:100%;z-index:50;">
                           <?php
							if($row!=null){
						   ?>
						   <input type="submit" id="btn-submit" name="" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:51;">
						   <?php
							}
						   ?>
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