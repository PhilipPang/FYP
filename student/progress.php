<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Progress - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="progress.css" rel="stylesheet">
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
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:16;">
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
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:17;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_btn-chat">
                  <div id="btn-chat">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Icon6" style="display:inline-block;width:22px;height:25px;text-align:center;z-index:18;">
                              <div id="Icon6"><i class="fa fa-commenting"></i></div>
                           </div>
                        </div>
                        <div class="col-2">
                           <label for="" id="Label6" style="display:block;width:100%;line-height:19px;z-index:19;">Chat</label>
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Project Progress</p>
               </div>
               <hr id="HorizontalLine17" style="display:block;width:100%;z-index:73;">
               <div id="ppx_add-progress" style="display:inline-block;width:185px;height:50px;z-index:74;">
                  <a class="ui-button ui-corner-all" id="add-progress" href="./progress-add.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Add Progress</a>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:75;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;">Start</p>
                           </div>
                           <hr id="HorizontalLine9" style="display:inline-block;width:10px;z-index:41;">
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
                           <hr id="HorizontalLine10" style="display:inline-block;width:10px;z-index:43;">
                           <div id="ppx_LayoutGrid4">
                              <div id="LayoutGrid4">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_Shape1" style="display:inline-block;width:50px;height:50px;z-index:42;position:relative;">
                                          <img src="images/img0009.png" id="Shape1" alt="" width="50" height="50" style="width:50px;height:50px;">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine11" style="display:inline-block;width:10px;z-index:45;">
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
                                       <hr id="HorizontalLine12" style="display:block;width:100%;z-index:49;">
                                       <hr id="HorizontalLine13" style="display:block;width:100%;z-index:50;">
                                       <div id="ppx_progress_description">
                                          <p><?php echo $row5['progress_description']?></p>
                                       </div>
                                       <div id="ppx_Text8">
                                          <h6>Comment</h6><br/>
                                       </div>
                                       <hr id="HorizontalLine14" style="display:block;width:100%;z-index:53;">
                                       <div id="ppx_progress_comment">
                                          <p><?php echo $row5['progress_comment']?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
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
                           <hr id="HorizontalLine18" style="display:block;width:100%;z-index:60;">
                           <hr id="HorizontalLine20" style="display:block;width:100%;z-index:61;">
                           <div id="ppx_Text10">
                              <p><?php echo $row5['progress_description']?></p>
                           </div>
                           <div id="ppx_Text13">
                              <h6>Comment</h6><br/>
                           </div>
                           <hr id="HorizontalLine19" style="display:block;width:100%;z-index:64;">
                           <div id="ppx_Text9">
                              <p><?php echo $row5['progress_comment']?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <hr id="HorizontalLine15" style="display:inline-block;width:10px;z-index:67;">
                           <div id="ppx_LayoutGrid8">
                              <div id="LayoutGrid8">
                                 <div class="row">
                                    <div class="col-1">
                                       <div id="ppx_Shape2" style="display:inline-block;width:50px;height:50px;z-index:66;position:relative;">
                                          <img src="images/img0010.png" id="Shape2" alt="" width="50" height="50" style="width:50px;height:50px;">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr id="HorizontalLine16" style="display:inline-block;width:10px;z-index:69;">
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
                           <hr id="HorizontalLine21" style="display:inline-block;width:10px;z-index:70;">
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