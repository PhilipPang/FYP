<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Student - ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX-Phillip.css" rel="stylesheet">
<link href="my-student.css" rel="stylesheet">
<!-- <script>   
   function submitsearch_form()
   {
      var regexp;
      var search_project = document.getElementById('search_project');
      if (!(search_project.disabled || search_project.style.display === 'none' || search_project.style.visibility === 'hidden'))
      {
         regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/;
         if (!regexp.test(search_project.value))
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
         if (search_project.value == "")
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
         if (search_project.value.length > 50)
         {
            alert("Please Enter A Title For Your Progressionm, Max 50");
            search_project.focus();
            return false;
         }
      }
      return true;
   }
</script> -->
<?php

include("read-student.php");
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
                              <img src="data:image;base64,<?php echo $row2['supervisor_profilepic']?>" id="user-profile_picture" alt="" width="50" height="50" style="width:50px;height:50px;">
                           </div>
                        </div>
            
                        <div class="col-2">
                           <div id="ppx_user-profile_name">
                              <p style="font-weight:bold;"><?php echo $row2['supervisor_firstname']?> <?php echo $row2['supervisor_lastname']?></p>
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
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; My Students</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:52;">
               <div id="ppx_LayoutGrid3">
                  <form name="search_form" method="get" enctype="application/x-www-form-urlencoded" id="LayoutGrid3">
                     <div class="row">
                        <div class="col-1">
                           <input type="search" id="search_project" style="display:block;width:100%;height:40px;z-index:39;" name="search" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="search">
                        </div>
                        <div class="col-2">
                           <div id="ppx_enter-btn" style="display:inline-block;width:67px;height:40px;z-index:40;">
                              <input class="ui-button ui-corner-all" type="submit" value="Enter" id="enter-btn" style="width:100%;height:100%;">
                           </div>
                        </div>
                        <div class="col-3">
                        </div>
                     </div>
                  </form>
               </div>

               
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:54;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;"><span class="Lable-status">Student ID</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Student Name</span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status">Student Email</span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text8">
                              <p style="font-weight:bold;"><span class="Lable-status">Gender</span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_Text7">
                              <p style="font-weight:bold;"><span class="Lable-status">Action</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <?php
				function display_student($student_row){
			   ?>
               
               <div id="ppx_project_layout">
                  <form name="looping_form" method="post" action="looping-form.php" enctype="application/x-www-form-urlencoded" target="_blank" id="project_layout">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_data-stu-id">
                              <p><span class="Lable-status_data_2"><?php echo $student_row["student_ID"] ?></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_data-stu-name">
                              <p><span class="Lable-status_data_2"><?php echo $student_row['student_firstname']?><?php echo $student_row['student_lastname']?></span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_data-email">
                              <p><span class="Lable-status_data_2"><?php echo $student_row['student_email']?></span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_data-gender">
                              <p><span class="Lable-status_data_2"><?php echo $student_row['student_gender']?></span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_btn-view" style="display:inline-block;width:100%;height:18px;z-index:50;">
                           <a class="ui-button ui-corner-all" id="btn-view" href="./view-student.php?
                           student_ID=<?php echo $student_row['student_ID']; ?>
                           
                           &student_firstname=<?php echo $student_row['student_firstname']; ?>
                           &student_lastname=<?php echo $student_row['student_lastname']; ?>
                           &student_birthdate=<?php echo $student_row['student_birthdate']; ?>
                           &student_gender=<?php echo $student_row['student_gender']; ?>
                           &student_mobilenum=<?php echo $student_row['student_mobilenum']; ?>
                           &student_email=<?php echo $student_row['student_email']; ?>" style="width:100%;height:100%;">
                              <span class="ui-button-icon ui-icon ui-primary"></span>
                              <span class="ui-button-icon-space"> </span>View
                           </a>  
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <?php
            }
            ?>
            <?php
				$student_sql = "SELECT * FROM student WHERE supervisor_ID=$supervisor_ID";
            if (isset($_GET["search"])){

               $student_ID = $_GET["search"];
            }else {
               $student_ID = null;
            }
            $sql = "SELECT * FROM student WHERE student_ID = $student_ID AND supervisor_ID=$supervisor_ID";
            if ($student_ID === null){
               $student_result = mysqli_query($conn,$student_sql);

            while ($student_row = mysqli_fetch_array($student_result)){
                  
               
               display_student($student_row);
            }
         }else {
            $student_result = mysqli_query($conn,$sql);

            while ($student_row = mysqli_fetch_array($student_result)){
                  
               
               display_student($student_row);
            }
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