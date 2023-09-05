<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Progress - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="view-progress.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $("#ipf_desc").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '1',
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
         error_text: 'Please Enter The Progress Comment'
      });
      $("#LayoutGrid11").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#LayoutGrid12").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("#TextArea1").validate(
      {
         required: true,
         bootstrap: true,
         type: 'text',
         length_min: '1',
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
         error_text: 'Please Enter The Progress Comment'
      });
   });
</script>
<?php
// include("../src/action/conn.php");

// $sql = "SELECT * FROM progress LIMIT 5";
// $result = mysqli_query($conn, $sql);

// // Check if the query returned any results
// if (mysqli_num_rows($result) > 0) {
//   // Loop through the results and store the data as variables
//     $row = mysqli_fetch_assoc($result);
//     $id = $row["progress_ID"];
//     $title = $row["progress_title"];
//     $description = $row["progress_description"];
//     $comment = $row["progress_comment"];
//     $date = $row["progress_date"];
//     $project = $row["project_ID"];

//     $row = mysqli_fetch_assoc($result);
//     $id1 = $row["progress_ID"];
//     $title1 = $row["progress_title"];
//     $description1 = $row["progress_description"];
//     $comment1 = $row["progress_comment"];
//     $date1 = $row["progress_date"];
//     $project1 = $row["project_ID"];

//     $row = mysqli_fetch_assoc($result);
//     $id3 = $row["progress_ID"];
//     $title3 = $row["progress_title"];
//     $description3 = $row["progress_description"];
//     $comment3 = $row["progress_comment"];
//     $date3 = $row["progress_date"];
//     $project3 = $row["project_ID"];
  
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
                              <img src="data:image;base64,<?php echo $row3['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row3['supervisor_firstname']?> <?php echo $row3['supervisor_lastname']?></p>
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
               <div id="ppx_btn-chat">
                  <div id="btn-chat">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Icon6" style="display:inline-block;width:22px;height:25px;text-align:center;z-index:11;">
                              <div id="Icon6"><i class="fa fa-commenting"></i></div>
                           </div>
                        </div>
                        <div class="col-2">
                           <label for="" id="Label6" style="display:block;width:100%;line-height:19px;z-index:12;">Chat</label>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine3" style="display:block;width:100%;z-index:23;">
               <div id="ppx_Text1">
                  <p style="font-weight:bold;">SUPERVISOR PANEL</p>
               </div>
               <div id="ppx_LayoutGrid14">
                  <div id="LayoutGrid14">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:13;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine1" style="display:block;width:100%;z-index:26;">
               <hr id="HorizontalLine7" style="display:block;width:100%;z-index:27;">
               <div id="ppx_Text2">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_LayoutGrid15">
                  <div id="LayoutGrid15">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:14;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid16">
                  <div id="LayoutGrid16">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:15;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid17">
                  <div id="LayoutGrid17">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:16;">
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
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:17;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./submission.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Submission</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine2" style="display:block;width:100%;z-index:33;">
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:34;">
               <div id="ppx_Text3">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:18;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="./appointment.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-student">
                  <div id="btn-student">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:19;">
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
                           <div id="ppx_ThemeableButton10" style="display:inline-block;width:100%;height:50px;z-index:20;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton10" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine4" style="display:block;width:100%;z-index:39;">
               <hr id="HorizontalLine5" style="display:block;width:100%;z-index:40;">
               <hr id="HorizontalLine6" style="display:block;width:100%;z-index:41;">
               <div id="ppx_btn-logout">
                  <div id="btn-logout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton9" style="display:inline-block;width:100%;height:50px;z-index:21;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton9" href="" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_head-badge">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Project Progress</p>
               </div>
               <hr id="HorizontalLine17" style="display:block;width:100%;z-index:82;">
               <div id="ppx_back-btn" style="display:inline-block;width:120px;height:50px;z-index:83;">
                  <a class="ui-button ui-corner-all" id="back-btn" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Back</a>
               </div>
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;">Start</p>
                           </div>
                           <hr id="HorizontalLine9" style="display:inline-block;width:10px;z-index:44;">
                        </div>
                        <div class="col-3">
                        </div>
                     </div>
                  </div>
               </div>
               <?php
				function right_progress($row5){
			   ?>
               <div id="ppx_progress-r">
                  <div id="progress-r">
                     <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-2">
                           <hr id="HorizontalLine10" style="display:inline-block;width:10px;z-index:46;">
                           <div id="ppx_LayoutGrid4">
                              <div id="LayoutGrid4">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_Shape1" style="display:inline-block;width:50px;height:50px;z-index:45;position:relative;">
                                          <img src="images/img0023.png" id="Shape1" alt="" width="50" height="50" style="width:50px;height:50px;">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine11" style="display:inline-block;width:10px;z-index:48;">
                        </div>
                        <div class="col-3">
                           <div id="ppx_LayoutGrid6">
                              <div id="LayoutGrid6">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_LayoutGrid5">
                                          <div id="LayoutGrid5">
                                             <div class="row">
                                                <div class="col-1">
                                                   <div id="ppx_progress_title">
                                                      <h6><?php echo $row5['progress_title']?></h6><br/>
                                                   </div>
                                                </div>
                                                <div class="col-2">
                                                   <div id="ppx_progress_date">
                                                      <p><?php echo $row5['progress_date']?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr id="HorizontalLine12" style="display:block;width:100%;z-index:52;">
                                       <hr id="HorizontalLine13" style="display:block;width:100%;z-index:53;">
                                       <div id="ppx_progress_description">
                                          <p><?php echo $row5['progress_description']?></p>
                                       </div>
                                       <hr id="HorizontalLine14" style="display:block;width:100%;z-index:55;">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div id="ppx_LayoutGrid11">
                              <form name="progress_comment_form" method="post" action="update.progress.php" enctype="multipart/form-data" target="_blank" id="LayoutGrid11">
                              <input type="hidden" id="progress_ID" name="progress_ID" value="<?php echo $row5['progress_ID']?>">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_LayoutGrid7">
                                          <div id="LayoutGrid7">
                                             <div class="row">
                                                <div class="col-1">
                                                   <label class="Lable-status" for="HorizontalLine10" id="lbl_cmt" style="display:block;width:100%;line-height:18px;z-index:56;">Comment</label>
                                                </div>
                                                <div class="col-2">
                                                   <div id="ppx_btn-post" style="display:inline-block;width:100%;height:18px;z-index:57;">
                                                      <input  class="ui-button ui-corner-all" id="btn-post" value="post" type="submit" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Post
                                                      
                                                   </div>
                                                </div>
                                                <div class="col-3">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="ppx_ipf_desc" style="display:inline-block;width:100%;height:137px;z-index:59;">
                                          <textarea name="progress_cmt" id="ipf_desc"  rows="6" cols="40" maxlength="255" autocomplete="off" spellcheck="false" placeholder="No Record Found - Please enter progress description (Max 255 word)"></textarea>
                                          <div class="invalid-feedback">Please Enter The Progress Comment</div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
				}
			   ?>
			   <?php
				function left_progress($row5){
			   ?>
               <div id="ppx_progress-l">
                  <div id="progress-l">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_LayoutGrid9">
                              <div id="LayoutGrid9">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_LayoutGrid10">
                                          <div id="LayoutGrid10">
                                             <div class="row">
                                                <div class="col-1">
                                                   <div id="ppx_Text6">
                                                      <h6><?php echo $row5['progress_title']?></h6><br/>
                                                   </div>
                                                </div>
                                                <div class="col-2">
                                                   <div id="ppx_Text7">
                                                      <p><?php echo $row5['progress_date']?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine18" style="display:block;width:100%;z-index:70;">
                           <hr id="HorizontalLine20" style="display:block;width:100%;z-index:71;">
                           <div id="ppx_Text10">
                              <p> <?php echo $row5['progress_description']?></p>
                           </div>
                           <hr id="HorizontalLine19" style="display:block;width:100%;z-index:73;">
                           <div id="ppx_LayoutGrid12">
                              <form name="progress_comment_form" method="post" action="update.progress.php" enctype="multipart/form-data" target="_blank" id="LayoutGrid12">
                              <input type="hidden" id="progress_ID" name="progress_ID" value="<?php echo $row5['progress_ID']?>">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_LayoutGrid13">
                                          <div id="LayoutGrid13">
                                             <div class="row">
                                                <div class="col-1">
                                                   <label class="Lable-status" for="HorizontalLine10" id="Label1" style="display:block;width:100%;line-height:18px;z-index:65;">Comment</label>
                                                </div>
                                                <div class="col-2">
                                                   <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:18px;z-index:66;">
                                                      <input class="ui-button ui-corner-all" id="ThemeableButton8" value="post" type="submit" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>
                                                   </div>
                                                </div>
                                                <div class="col-3">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="ppx_TextArea1" style="display:inline-block;width:100%;height:137px;z-index:68;">
                                          <textarea name="progress_cmt" id="TextArea1"  rows="6" cols="40" maxlength="255" autocomplete="off" spellcheck="false" placeholder="No Record Found - Please enter progress description (Max 255 word)"></textarea>
                                          <div class="invalid-feedback">Please Enter The Progress Comment</div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="col-2">
                           <hr id="HorizontalLine15" style="display:inline-block;width:10px;z-index:76;">
                           <div id="ppx_LayoutGrid8">
                              <div id="LayoutGrid8">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_Shape2" style="display:inline-block;width:50px;height:50px;z-index:75;position:relative;">
                                          <img src="images/img0024.png" id="Shape2" alt="" width="50" height="50" style="width:50px;height:50px;">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine16" style="display:inline-block;width:10px;z-index:78;">
                        </div>
                        <div class="col-3">
                        </div>
                     </div>
                  </div>
               </div>
               <?php
				}
				if($row3['project_ID'] != null){
					$project_ID = $row3['project_ID'];
					$sql5 = "SELECT * FROM progress WHERE project_ID=$project_ID";
					$result5 = mysqli_query($conn,$sql5);
					$count = 1;
					while ($row5 = mysqli_fetch_array($result5)){
						if($count % 2 != 0){
							right_progress($row5);
						} elseif($count % 2 == 0){
							left_progress($row5);
						}
						$count = $count + 1;
					}
				} else{
					$row5 = null;
				}
			   ?>
               <div id="ppx_LayoutGrid3">
                  <div id="LayoutGrid3">
                     <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-2">
                           <hr id="HorizontalLine21" style="display:inline-block;width:10px;z-index:79;">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;">End</p>
                           </div>
                        </div>
                        <div class="col-3">
                        </div>
                     </div>
                  </div>
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