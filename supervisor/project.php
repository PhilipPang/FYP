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
<script>   
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
</script>
<?php
include("read-project.php");
include("project-approval.php");
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
   <div id="ppx_LayoutGrid4">
      <nav id="LayoutGrid4">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text13">
                  <p style="font-weight:bold;">SUPERVISOR PANEL</p>
               </div>
               <div id="ppx_LayoutGrid5">
                  <div id="LayoutGrid5">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton1" style="display:inline-block;width:100%;height:50px;z-index:26;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton1" href="./profile.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Profile</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine12" style="display:block;width:100%;z-index:37;">
               <hr id="HorizontalLine9" style="display:block;width:100%;z-index:38;">
               <div id="ppx_Text16">
                  <p style="font-weight:bold;">PROJECT</p>
               </div>
               <div id="ppx_LayoutGrid6">
                  <div id="LayoutGrid6">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton2" style="display:inline-block;width:100%;height:50px;z-index:27;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton2" href="./project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Project</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid7">
                  <div id="LayoutGrid7">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton3" style="display:inline-block;width:100%;height:50px;z-index:28;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton3" href="./progress.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Progress</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid8">
                  <div id="LayoutGrid8">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton4" style="display:inline-block;width:100%;height:50px;z-index:29;">
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
                           <div id="ppx_ThemeableButton5" style="display:inline-block;width:100%;height:50px;z-index:30;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton5" href="./submission.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Submission</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine13" style="display:block;width:100%;z-index:44;">
               <hr id="HorizontalLine10" style="display:block;width:100%;z-index:45;">
               <div id="ppx_Text17">
                  <p style="font-weight:bold;">OTHERS</p>
               </div>
               <div id="ppx_btn-appt">
                  <div id="btn-appt">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton9" style="display:inline-block;width:100%;height:50px;z-index:31;">
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
                           <div id="ppx_ThemeableButton6" style="display:inline-block;width:100%;height:50px;z-index:32;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton6" href="./my-student.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>My Student</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid9">
                  <div id="LayoutGrid9">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton7" style="display:inline-block;width:100%;height:50px;z-index:33;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton7" href="./notification.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Notification</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr id="HorizontalLine15" style="display:block;width:100%;z-index:50;">
               <hr id="HorizontalLine11" style="display:block;width:100%;z-index:51;">
               <hr id="HorizontalLine14" style="display:block;width:100%;z-index:52;">
               <div id="ppx_LayoutGrid10">
                  <div id="LayoutGrid10">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_ThemeableButton8" style="display:inline-block;width:100%;height:50px;z-index:34;">
                              <a class="ui-button ui-corner-all" id="ThemeableButton8" href="" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Logout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div id="ppx_Text18">
                  <p style="font-weight:bold;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Project</p>
               </div>
               <hr id="HorizontalLine16" style="display:block;width:100%;z-index:70;">
               <div id="ppx_LayoutGrid3">
                  <form name="search_form" method="post" action="search.php" enctype="application/x-www-form-urlencoded" id="LayoutGrid3" onsubmit="return submitsearch_form()">
                     <div class="row">
                        <div class="col-1">
                           <input type="search" id="search_project" style="display:block;width:100%;height:40px;z-index:54;" name="search" value="" maxlength="50" autocomplete="off" spellcheck="false" placeholder="search">
                        </div>
                        <div class="col-2">
                           <div id="ppx_enter-btn" style="display:inline-block;width:67px;height:40px;z-index:55;">
                              <a class="ui-button ui-corner-all" id="enter-btn" href="./project.php" style="width:100%;height:100%;">Search</a>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_btn-add-progject" style="display:inline-block;width:171px;height:50px;z-index:56;">
                              <a class="ui-button ui-corner-all" id="btn-add-progject" href="./add-project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>Add Project</a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <hr id="HorizontalLine8" style="display:block;width:100%;z-index:72;">
               <div id="ppx_LayoutGrid1">
                  <div id="LayoutGrid1">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Text4">
                              <p style="font-weight:bold;"><span class="Lable-status">Project ID</span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Text5">
                              <p style="font-weight:bold;"><span class="Lable-status">Project Name</span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Text6">
                              <p style="font-weight:bold;"><span class="Lable-status">Program</span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_Text8">
                              <p style="font-weight:bold;"><span class="Lable-status">Status</span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_Text9">
                              <p style="font-weight:bold;"><span class="Lable-status">Create Date</span></p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div id="ppx_Text7">
                              <p style="font-weight:bold;"><span class="Lable-status">Action</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
               function display_project($project_row, $program_row, $is_approve){
			   ?>
               <div id="ppx_project_layout">
                  <form name="looping_form" method="post" action="edit-project.php" enctype="multipart/form-data" target="_blank" id="project_layout">
                     <input type="hidden" name="project_ID" value='<?php echo $project_row["project_ID"]; ?>'>
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_data-project-id">
                              <p><span class="Lable-status_data_2"><?php if($project_row!=null){echo $project_row["project_ID"];} ?></span></p>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_data-project-name">
                              <p><span class="Lable-status_data_2"><?php if($project_row!=null){echo $project_row["project_name"];} ?></span></p>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_data-program">
                              <p><span class="Lable-status_data_2"><?php if($program_row!=null){echo $program_row["program_name"];} ?></span></p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div id="ppx_data-status">
                              <p><span class="Lable-status_data_2"><?php echo $is_approve; ?></span></p>
                           </div>
                        </div>
                        <div class="col-5">
                           <div id="ppx_data-date">
                              <p><span class="Lable-status_data_2"><?php if($project_row!=null){echo $project_row["create_at"];} ?></span></p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div id="ppx_btn-edit" style="display:inline-block;width:100%;height:18px;z-index:68;">
                              <input type="submit" value="edit" class="ui-button ui-corner-all" id="btn-edit" href="./edit-project.php" style="width:100%;height:100%;"><span class="ui-button-icon ui-icon ui-primary"></span><span class="ui-button-icon-space"> </span>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <?php
               }
               ?>
               <?php

               if($row['project_ID']!=null){
               $project_ID=$row["project_ID"];

               $project_SQL = "SELECT * FROM project WHERE project_ID=".$project_ID;
               $project_result = mysqli_query($conn, $project_SQL);
               $rows = array();
               while ($project_row = mysqli_fetch_array($project_result)){
                  $rows[] = $project_row;
               }
               $rows = array_reverse($rows);
               foreach ($rows as $project_row) {

                  if($row2!=null){
                     if($row2["is_approve"] == 1){
                        $is_approve = "Approved";
                     } elseif($row2["is_approve"] == 2){
                        $is_approve = "Rejected";
                     } else{
                        $is_approve = "Pending";
                     }
                  }
                  else{
                     $is_approve = "";
                  }


                  $program_ID=$project_row["program_ID"];

                  $sql3 = "SELECT * FROM program WHERE program_ID=".$program_ID;
                  $result3 = mysqli_query($conn,$sql3);
                  $row3 = mysqli_fetch_array($result3);
                  
                  display_project($project_row, $row3, $is_approve);
                  
               }
            }
            else{
               $project_row = null;
               $program_row = null;
               $is_approve = null;
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