<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    
    // Authentication  
   $mail->Username   = "samruddhirrr@gmail.com"; // Your full Gmail address
    $mail->Password   = "globe123"; // Your Gmail password
      
 
    
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']); 
    $mail->Subject = "Doctor Mail";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("samruddhirrr@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<html>

<head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
      <meta name = "apple-mobile-web-app-capable" content = "yes" />
      <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
         <style>
           .navbar {
      padding-top: 5px;
      padding-bottom: 5px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .imgg{
	width:150px;
  }
  
</style>
</head>
<body>
   <body>
	<body>
      <div class = "views">
         <div class = "view view-main">
            <div class = "pages">
               <div data-page = "home" class = "page navbar-fixed">
			<!-- Navbar -->
			<div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"><a href="dashboard.php" class="external"><i class="icon icon-back"></i></a></div>
                        <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"></div>
					
                     </div>
                  </div>
                  <form name="form1" id="form1" action="" method="post">


                  <div class = "page-content">
                     <div class = "content-block-title"><h2><center>Email</center></h2></div>
                     <div class = "list-block inset">
                       <p><center>The Email will be sent to the admin</center></p>
                        <ul>
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type="text" name="fullname" placeholder="Full Name">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type = "text" name="comments"><textarea placeholder="Comments"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </li>
                                                      
                        </ul>
                        <div><br><input type="submit" class="button button-fill button-big button-round" name="submit" value="Send"></br></div>
                     </div>
                  </div>
                  			</form>
               </div>
            </div>
         </div>
      </div>
      
      <script type = "text/javascript" 
         src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
         
      <script>
         // here initialize the app
         var myApp = new Framework7();

         // If your using custom DOM library, then save it to $$ variable
         var $$ = Dom7;

         // Add the view
         var mainView = myApp.addView('.view-main', {
            // enable the dynamic navbar for this view
            dynamicNavbar: true
         });
      </script>
   </body>
	
</body>
</html>