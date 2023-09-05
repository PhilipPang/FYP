<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Project - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="edit-project.css" rel="stylesheet">
<script src="jquery-3.6.4.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#edit-project-from").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#ipf_project_name").validate(
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
      $("#ipf_start_date").validate(
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
      $("#ipf_end_date").validate(
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
      $("#ipf_present_date").validate(
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
      $("#ipf_guide_title").validate(
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
         error_text: 'Please Enter A Title For Guideline, Max 50'
      });
      $("#ipf_overview").validate(
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
         error_text: 'Please Enter Project Overview'
      });
      $("#ipf_instruction").validate(
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
      $("#ipf_guide_file :file").on('change', function()
      {
         var input = $(this).parents('.input-group').find(':text');
         input.val($(this).val());
         input.blur();
      });
      $("#ipf_guide_file .form-control").validate(
      {
         required: false,
         bootstrap: true,
         type: 'custom',
         param: /([^\/\\]+)\.(doc|docx|pdf)$/i,
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
         error_text: ''
      });
   });
</script>
<?php
include("../src/action/conn.php");


$query = "SELECT supervisor_firstname, supervisor_lastname, supervisor_profilepic, project_ID FROM supervisor LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
   $firstName = $row['supervisor_firstname'];
   $lastName = $row['supervisor_lastname'];
   $profilePic = $row['supervisor_profilepic'];
   $id = $row['project_ID'];
}

$project_ID = $_POST["project_ID"];

$query2 = "SELECT reject_detail FROM project LIMIT 1";
$result2 = mysqli_query($conn, $query2);

while ($row2 = mysqli_fetch_assoc($result2)) {
   $reject = $row2["reject_detail"];
}




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
                              <img src="data:image;base64,<?php echo $profilePic?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $firstName?><?php echo $lastName?></p>
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Edit Project</p>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:68;">
               <div id="ppx_back-btn" style="display:inline-block;width:120px;height:50px;z-index:69;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:70;">
               
               <- Loop->

               
               
               <div id='ppx_lbl-reject' >
                  <p style='font-weight:bold;'>Rejected Detail</p>
               </div>
               <div id='ppx_data-rejected-detail'>
                  <p><?php echo $reject; ?></p>
               </div>
         <?php
            echo $reject;
               
               if($reject === NULL){
                  echo 
                  "<style>

                  #ppx_lbl-reject{
                     display : none;
                  }

                  #ppx_data-rejected-detail{
                     display : none;
                  }

                  </style>";
               } 
               else{
                  echo 
                  "<style>
                  
                  #ppx_lbl-reject{
                     display : block;
                  }

                  #ppx_data-rejected-detail{
                     display : block;
                  }

                  </style>";

               }
               ?>
               <-end->
               <div id="ppx_edit-project-from">
                  <form name="project_ID" method="post" action="edit-delete.php" enctype="multipart/form-data" target="_blank" id="edit-project-from">
                     <input type="hidden" name="project_ID" value="<?php echo $project_ID ?>">
                     <div class="row">
                        <div class="col-1">
                           <label class="Lable-status" for="ipf_project_name" id="lbl_project_name" style="display:block;width:100%;line-height:18px;z-index:47;">Project Name</label>
                           <div id="ppx_ipf_project_name" style="display:inline-block;width:100%;height:40px;z-index:48;">
                              <input type="text" id="ipf_project_name"  name="project_name" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="Enter a Project Name">
                              <div class="invalid-feedback">Please Enter A Title For The Project, Max 50</div>
                           </div>
                           <div id="ppx_LayoutGrid3">
                              <div id="LayoutGrid3">
                                 <div class="row">
                                    <div class="col-1">
                                       <label class="Lable-status" for="ipf_start_date" id="lbl_start_date" style="display:block;width:100%;line-height:18px;z-index:39;">Start Date</label>
                                       <div id="ppx_ipf_start_date" style="display:inline-block;width:100%;height:40px;z-index:40;">
                                          <input type="datetime-local" id="ipf_start_date"  name="start_date" value="" autocomplete="off" spellcheck="false" placeholder="Project Start Date">
                                          <div class="invalid-feedback">Please Enter A Valid Date</div>
                                       </div>
                                    </div>
                                    <div class="col-2">
                                       <label class="Lable-status" for="ipf_end_date" id="lbl_end_date" style="display:block;width:100%;line-height:18px;z-index:41;">End Date</label>
                                       <div id="ppx_ipf_end_date" style="display:inline-block;width:100%;height:40px;z-index:42;">
                                          <input type="datetime-local" id="ipf_end_date"  name="end_date" value="" autocomplete="off" spellcheck="false" placeholder="Project End Date">
                                          <div class="invalid-feedback">Please Enter A Valid Date</div>
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <label class="Lable-status" for="ipf_present_date" id="lbl_present_date" style="display:block;width:100%;line-height:18px;z-index:43;">Presentation Date</label>
                                       <div id="ppx_ipf_present_date" style="display:inline-block;width:100%;height:40px;z-index:44;">
                                          <input type="datetime-local" id="ipf_present_date"  name="presentation_date" value="" autocomplete="off" spellcheck="false" placeholder="Presentation Date">
                                          <div class="invalid-feedback">Please Enter A Valid Date</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <label class="Lable-status" for="ipf_desc" id="lbl_desc" style="display:block;width:100%;line-height:18px;z-index:50;">Description</label>
                           <div id="ppx_ipf_desc" style="display:inline-block;width:100%;height:200px;z-index:51;">
                              <textarea name="project_desc" id="ipf_desc"  rows="9" cols="111" autocomplete="off" spellcheck="false" placeholder="Enter Project Description"></textarea>
                              <div class="invalid-feedback">Please Enter The Description.</div>
                           </div>
                           <hr id="HorizontalLine10" style="display:block;width:100%;z-index:52;">
                           <div id="ppx_Text4">
                              <span style="color:#7F63F4;font-family:Arial;font-size:16px;"><strong>Project Guideline</strong></span>
                           </div>
                           <hr id="HorizontalLine11" style="display:block;width:100%;z-index:54;">
                           <label class="Lable-status" for="ipf_guide_title" id="lbl_guide_title" style="display:block;width:100%;line-height:18px;z-index:55;">Title</label>
                           <div id="ppx_ipf_guide_title" style="display:inline-block;width:100%;height:40px;z-index:56;">
                              <input type="text" id="ipf_guide_title"  name="guildeline_title" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="Enter a Guildeline Title">
                              <div class="invalid-feedback">Please Enter A Title For Guideline, Max 50</div>
                           </div>
                           <hr id="HorizontalLine12" style="display:block;width:100%;z-index:57;">
                           <label class="Lable-status" for="ipf_overview" id="lbl_overview" style="display:block;width:100%;line-height:18px;z-index:58;">Project Overview</label>
                           <div id="ppx_ipf_overview" style="display:inline-block;width:100%;height:200px;z-index:59;">
                              <textarea name="guide_overview" id="ipf_overview"  rows="9" cols="111" autocomplete="off" spellcheck="false" placeholder="Enter Project Overview"></textarea>
                              <div class="invalid-feedback">Please Enter Project Overview</div>
                           </div>
                           <hr id="HorizontalLine13" style="display:block;width:100%;z-index:60;">
                           <label class="Lable-status" for="ipf_instruction" id="lbl_instruction" style="display:block;width:100%;line-height:18px;z-index:61;">Project Instruction/requirement</label>
                           <div id="ppx_ipf_instruction" style="display:inline-block;width:100%;height:200px;z-index:62;">
                              <textarea name="guide_desc" id="ipf_instruction"  rows="9" cols="111" autocomplete="off" spellcheck="false" placeholder="Enter Project Instruction/requirement"></textarea>
                              <div class="invalid-feedback">Please Enter The Description.</div>
                           </div>
                           <hr id="HorizontalLine14" style="display:block;width:100%;z-index:63;">
                           <div id="ppx_ipf_guide_file" style="display:inline-block;width:100%;z-index:64;">
                              <div id="ipf_guide_file" class="input-group">
                                 <input class="form-control" type="text" readonly id="ipf_guide_file-input" placeholder="Upload Guideline Files (Doc, Docx, PDF)">
                                 <label class="input-group-btn">
                                    <input type="file" accept=".doc,.docx,.pdf" name="guideline_file" id="ipf_guide_file-file" style="display:none;" multiple><span class="btn">Browse...</span>
                                 </label>
                              </div>
                           </div>
                           <hr id="HorizontalLine15" style="display:block;width:100%;z-index:65;">
                           <div id="ppx_LayoutGrid1">
                              <div id="LayoutGrid1">
                                 <div class="row">
                                    <div class="col-1">
                                       <input type="submit" id="btn-submit" name="edit" value="Submit" style="display:inline-block;width:168px;height:44px;z-index:45;">
                                    </div>
                                 
                                    <div class="col-2">
                                    
                                       <input type="submit" id="btn-delete" name="delete" value="Delete" style="display:inline-block;width:168px;height:44px;z-index:46;">

                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
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