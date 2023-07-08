<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="profile.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="validation.min.js"></script>
<script src="passwordstrength/jquery.passwordstrength.min.js"></script><script>   
   $(document).ready(function()
   {
      $("#acc-pfpic :file").on('change', function()
      {
         var input = $(this).parents('.input-group').find(':text');
         input.val($(this).val());
         input.blur();
      });
      $("#acc-pfpic .form-control").validate(
      {
         required: false,
         bootstrap: true,
         type: 'custom',
         param: /([^\/\\]+)\.(jpeg|jpg|png)$/i,
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
      $("#change-profile-pic").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#acc-pass-form").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#acc-password1").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '8',
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
         error_text: 'Please enter stronger password'
      });
      $("#acc-password2").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '8',
         match_id: 'acc-password1',
         match_text: 'Password does not match, try again',
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
         error_text: 'Please enter stronger password'
      });
   $('#acc-password1').passwordStrength();
   });
</script>
</head>
<body>
   <?php
	include("read-student.php");
   ?>
   <div id="ppx_LayoutGrid1">
      <header id="LayoutGrid1">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Image1" style="display:inline-block;width:100%;height:auto;z-index:0;">
                  <img src="images/Logo-w.png" id="Image1" alt="" width="210" height="60">
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_LayoutGrid11">
                  <div id="LayoutGrid11">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_user-profile_picture" style="display:inline-block;width:50px;height:50px;z-index:1;position:relative;">
                              <img src="data:image;base64,<?php echo $row['student_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row['student_firstname']?> <?php echo $row['student_lastname']?></p>
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
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:4;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine4" style="display:block;width:100%;z-index:16;">
               <hr id="HorizontalLine1" style="display:block;width:100%;z-index:17;">
               <div id="ppx_Text2">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_btn-guideline">
                  <div id="btn-guideline">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:5;">
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
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:6;">
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
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:7;">
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
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:8;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine5" style="display:block;width:100%;z-index:23;">
               <hr id="HorizontalLine2" style="display:block;width:100%;z-index:24;">
               <div id="ppx_Text3">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:11;">
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
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:12;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine7" style="display:block;width:100%;z-index:29;">
               <hr id="HorizontalLine3" style="display:block;width:100%;z-index:30;">
               <hr id="HorizontalLine6" style="display:block;width:100%;z-index:31;">
               <div id="ppx_btn-logout">
                  <div id="btn-logout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:13;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="../logout.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Student Information</p>
               </div>
               <div id="ppx_appt-row1">
                  <div id="appt-row1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_lable-student-id">
                              <p style="font-weight:bold;">Student ID</p>
                           </div>
                           <div id="ppx_data-student-id">
                              <p><?php echo $row['student_ID']?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_lable-program">
                              <p style="font-weight:bold;">Intake Program</p>
                           </div>
                           <div id="ppx_data-program">
                              <p><?php echo $row2['program_name']?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_lable-f-name">
                              <p style="font-weight:bold;">First Name</p>
                           </div>
                           <div id="ppx_data-f-name">
                              <p><?php echo $row['student_firstname']?></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_lable-l-name">
                              <p style="font-weight:bold;">Last Name</p>
                           </div>
                           <div id="ppx_data-l-name">
                              <p><?php echo $row['student_lastname']?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid12">
                  <div id="LayoutGrid12">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text10">
                              <p style="font-weight:bold;">Birth Date</p>
                           </div>
                           <div id="ppx_data-birth-date">
                              <p><?php echo $row['student_birthdate']?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text11">
                              <p style="font-weight:bold;">Gender</p>
                           </div>
                           <div id="ppx_data-gender">
                              <p><?php echo $row['student_gender']?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text14">
                              <p style="font-weight:bold;">Contact Number</p>
                           </div>
                           <div id="ppx_data-contact">
                              <p><?php echo $row['student_mobilenum']?></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text16">
                              <p style="font-weight:bold;">Student Email</p>
                           </div>
                           <div id="ppx_data-email">
                              <p><?php echo $row['student_email']?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid13">
                  <div id="LayoutGrid13">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text18">
                              <p style="font-weight:bold;">IC/Passport Number</p>
                           </div>
                           <div id="ppx_data-ic">
                              <p><?php echo $row['student_ic']?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text19">
                              <p style="font-weight:bold;">Country</p>
                           </div>
                           <div id="ppx_data-country">
                              <p><?php echo $row['student_country']?></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text22">
                              <p style="font-weight:bold;">Address</p>
                           </div>
                           <div id="ppx_data-address">
                              <p><?php echo $row['student_address']?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_change-profile-pic">
                  <form name="change_profile_pic" method="post" action="change-profile-pic.php" enctype="multipart/form-data" target="_blank" id="change-profile-pic">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_acc-pfpic" style="display:inline-block;width:100%;z-index:55;">
                              <div id="acc-pfpic" class="input-group">
                                 <input class="form-control" type="text" readonly id="acc-pfpic-input" placeholder="Change Profile Picture">
                                 <label class="input-group-btn">
                                    <input type="file" accept=".jpeg,.jpg,.png" name="pfpic" id="acc-pfpic-file" style="display:none;"><span class="btn">Browse...</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <input type="submit" id="btn-change" name="" value="Change" style="display:inline-block;width:168px;height:44px;z-index:56;">
                        </div>
                     </div>
                  </form>
               </div>
               <div id="ppx_acc-pass-form">
                  <form name="acc_pw_change" method="post" action="acc-pw_change.php" enctype="application/x-www-form-urlencoded" target="_blank" id="acc-pass-form">
                     <div class="row">
                        <div class="col-1">
                           <label for="acc-password1" id="Label-pass-1" style="display:block;width:100%;line-height:20px;z-index:58;">New Password</label>
                           <div id="ppx_acc-password1" style="display:inline-block;width:100%;height:45px;z-index:59;">
                              <input type="password" id="acc-password1"  name="acc-password-1" value="" autocomplete="off" spellcheck="false" placeholder=".  .  .  .  .">
                              <div class="invalid-feedback">Please enter stronger password</div>
                           </div>
                           <div id="ppx_acc-pass-spgrid">
                              <div id="acc-pass-spgrid">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_acc-pass-shpass" style="display:inline-block;width:326px;height:47px;z-index:57;">
                                          <label class="cbox"><input type="checkbox" onclick="showPW()">Show Password</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <label for="acc-password2" id="Label-pass-2" style="display:block;width:100%;line-height:20px;z-index:63;">Re-type Password</label>
                           <div id="ppx_acc-password2" style="display:inline-block;width:100%;height:45px;z-index:64;">
                              <input type="password" id="acc-password2"  name="password2" value="" autocomplete="off" spellcheck="false" placeholder=".  .  .  .  .">
                              <div class="invalid-feedback">Please enter stronger password</div>
                           </div>
                           <div id="ppx_acc-pass-btngrid">
                              <div id="acc-pass-btngrid">
                                 <div class="row">
                                    <div class="col-1">
                                       <input type="submit" id="btn-change-pass" name="" value="Change Password" style="display:inline-block;width:168px;height:44px;z-index:62;">
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
   <script>   
   function showPW(){var x=document.getElementById("acc-password1");if(x.type==="password"){x.type="text";}else{x.type="password";}}
   </script>
</body>
</html>