<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ProjectPlannerX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="ProjectPlanerX.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="validation.min.js"></script>
<script>   
   function submitContact_Form()
   {
      var regexp;
      var editboxEmail = document.getElementById('editboxEmail');
      if (!(editboxEmail.disabled || editboxEmail.style.display === 'none' || editboxEmail.style.visibility === 'hidden'))
      {
         regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
         if (!regexp.test(editboxEmail.value))
         {
            alert("Please enter a valid email address");
            editboxEmail.focus();
            return false;
         }
         if (editboxEmail.value == "")
         {
            alert("Please enter a valid email address");
            editboxEmail.focus();
            return false;
         }
      }
      return true;
   }
</script>
<script>   
   $(document).ready(function()
   {
      $("#contact").submit(function(event)
      {
         var isValid = $.validate.form(this);
         return isValid;
      });
      $("a[href*='#contact']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#ppx_contact').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("#editboxName").validate(
      {
         required: true,
         bootstrap: true,
         type: 'custom',
         param: /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/,
         length_min: '1',
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
         error_text: 'Please enter a valid name'
      });
      $("#editboxMessage").validate(
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
         error_text: ''
      });
   });
</script>
</head>
<body>
   <div id="ppx_header">
      <header id="header">
         <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
               <div id="ppx_logo" style="display:inline-block;width:100%;height:auto;z-index:0;">
                  <img src="images/Logo-d.png" id="logo" alt="" width="183" height="52">
               </div>
            </div>
            <div class="col-3">
            </div>
            <div class="col-4">
               <a id="nav-login" href="./login.php" style="display:inline-block;width:100px;height:50px;z-index:1;">Login</a>
            </div>
            <div class="col-5">
            </div>
         </div>
      </header>
   </div>
   <div id="ppx_hero">
      <main id="hero">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text1">
                  <h1>Final Year Project Management System</h1><br/>
               </div>
               <a id="Button1" href="./login.php" style="display:inline-block;width:197px;height:50px;z-index:3;">Login Now !</a>
            </div>
         </div>
      </main>
   </div>
   <div id="ppx_ourfeature">
      <section id="ourfeature">
         <div class="row">
            <div class="col-1">
               <div id="ppx_Text2">
                  <h2>Our Feature</h2><br/>
               </div>
               <div id="ppx_Text3">
                  <p><span class="Lable-status_data_2">The feature of our Final Year Project Management System</span></p>
               </div>
               <div id="ppx_LayoutGrid9">
                  <div id="LayoutGrid9">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Card6" style="display:flex;width:100%;z-index:4;" class="card">
                              <div id="Card6-card-body">
                                 <div id="Card6-card-item0"><i class="fa fa-archive"></i></div>
                                 <div id="Card6-card-item1">Project management</div>
                                 <div id="Card6-card-item2">Easily manage final year project</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Card7" style="display:flex;width:100%;z-index:5;" class="card">
                              <div id="Card7-card-body">
                                 <div id="Card7-card-item0"><i class="fa fa-product-hunt"></i></div>
                                 <div id="Card7-card-item1">Proposal Management</div>
                                 <div id="Card7-card-item2">Easily manage proposal, approve or reject student proposal</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Card9" style="display:flex;width:100%;z-index:6;" class="card">
                              <div id="Card9-card-body">
                                 <div id="Card9-card-item0"><i class="fa fa-clock-o"></i></div>
                                 <div id="Card9-card-item1">Progress Management</div>
                                 <div id="Card9-card-item2">Student update project progress, supervisor can leave comment for progress</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="ppx_LayoutGrid10">
                  <div id="LayoutGrid10">
                     <div class="row">
                        <div class="col-1">
                           <div id="ppx_Card11" style="display:flex;width:100%;z-index:7;" class="card">
                              <div id="Card11-card-body">
                                 <div id="Card11-card-item0"><i class="fa fa-question-circle"></i></div>
                                 <div id="Card11-card-item1">Guideline Management</div>
                                 <div id="Card11-card-item2">Set a guideline for the project</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="ppx_Card12" style="display:flex;width:100%;z-index:8;" class="card">
                              <div id="Card12-card-body">
                                 <div id="Card12-card-item0"><i class="fa fa-user-circle"></i></div>
                                 <div id="Card12-card-item1">User Management</div>
                                 <div id="Card12-card-item2">Admin can add, edit, delete student and supervisor</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-3">
                           <div id="ppx_Card13" style="display:flex;width:100%;z-index:9;" class="card">
                              <div id="Card13-card-body">
                                 <div id="Card13-card-item0"><i class="fa fa-bell"></i></div>
                                 <div id="Card13-card-item1">Notification</div>
                                 <div id="Card13-card-item2">Get update with notification detail</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <div id="ppx_contact">
      <form name="Contact_Form" method="post" action="src/contact.php" enctype="application/x-www-form-urlencoded" target="_blank" id="contact" onsubmit="return submitContact_Form()">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
               </div>
            </div>
            <div class="col-2">
               <div class="col-2-padding">
                  <div id="ppx_Text5">
                     <span style="color:#FFFFFF;font-family:Arial;font-size:32px;line-height:37px;"><strong>Get in touch</strong></span><span style="color:#000000;font-family:Arial;font-size:32px;line-height:37px;"><strong><br></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;line-height:18px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:15px;line-height:18px;">Contact us if you have any enquiries for admin department</span>
                  </div>
                  <label for="Label3" id="Label1" style="display:block;width:100%;line-height:16px;z-index:21;">Name</label>
                  <div id="ppx_editboxName" style="display:inline-block;width:100%;height:34px;z-index:22;">
                     <input type="text" id="editboxName"  name="name" value="" maxlength="50" autocomplete="off" spellcheck="false">
                     <div class="invalid-feedback">Please enter a valid name</div>
                  </div>
                  <label for="editboxMessage" id="Label2" style="display:block;width:100%;line-height:16px;z-index:23;">Email</label>
                  <input type="text" id="editboxEmail" style="display:block;width:100%;height:34px;z-index:24;" name="email" value="" autocomplete="off" spellcheck="false">
                  <label for="copyright" id="Label3" style="display:block;width:100%;line-height:16px;z-index:25;">Message</label>
                  <div id="ppx_editboxMessage" style="display:inline-block;width:100%;height:100px;z-index:26;">
                     <textarea name="message" id="editboxMessage"  rows="5" cols="72" autocomplete="off" spellcheck="false" placeholder="Max 255 letters"></textarea>
                  </div>
                  <input type="submit" id="Button2" name="" value="SUBMIT" style="display:block;width:100%;;height:39px;z-index:27;">
               </div>
            </div>
            <div class="col-3">
            </div>
         </div>
      </form>
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