<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css">
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
      <div class="views">
         <div class="view view-main">
            <div class="pages">
               <div data-page="home" class="page navbar-fixed">
		
		<!-- Navbar -->
		<div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"><a href="dashboard.php" class="external"><i class="icon icon-back"></i></a></div>
                        <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"></div>
					
                     </div>
                  </div>
                   
                  <div class="page-content">
                     <div class="content-block-title"><center><h1>Notification</h1></center></div>
                     <p><center>Notification from the Admin. Only last ten messages will be displayed</center></p>
                     <div class="list-block accordion-list">
                        <ul>
<?php

include 'config.php';

$id=$_GET['id'];
$query= $db->query("select * from notification where doctor_id='$id' LIMIT 10 ");
$rowCount = $query->num_rows;

while($row = $query->fetch_assoc()){  
//$row = $query->fetch_assoc();

?>
                           <li class="accordion-item">
                              <a href="#" class="item-content item-link">
                                 <div class="item-inner">
                                    <div class="item-title"><?php echo $row['title'];?></div>
                                    <div class="item-after"><span class="badge color-blue"><?php echo $row['created_at'];?></span></div>
                                 </div>
                              </a>
                              <div class="accordion-item-content">
                                 <div class="content-block">
                                    <p><?php echo $row['description'];?></p>
                                 </div>
                              </div>
                           </li>
   <?php
}
?>
                          
                          
                           
                          
                          
            
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
      <style>.custom-accordion{padding-left:0;padding-right:0;}.custom-accordion .accordion-item-toggle{padding:0px 15px;height:44px;line-height:44px;font-size:17px;color:#000;border-bottom:1px solid rgba(0,0,0,0.15);cursor:pointer;}.custom-accordion .accordion-item-toggle:active{background:rgba(0,0,0,0.15);}.custom-accordion .accordion-item-toggle span{display:inline-block;margin-left:15px;}.custom-accordion .accordion-item:last-child .accordion-item-toggle{border-bottom:none;}.custom-accordion .icon-plus,.custom-accordion .icon-minus{display:inline-block;width:22px;height:22px;border:1px solid #000;border-radius:100%;line-height:20px;text-align:center;}.custom-accordion .icon-minus{display:none;}.custom-accordion .accordion-item-expanded .icon-minus{display:inline-block;}.custom-accordion .accordion-item-expanded .icon-plus{display:none;}.custom-accordion .accordion-item-content{padding:0px 15px;}</style>
      <script>
         // here initialize the app
         var myApp = new Framework7();

         // If your using custom DOM library, then save it to $$ variable
         var $$ = Dom7;

         // Add the view
         var mainView = myApp.addView('.view-main', {
            // enable the dynamic navbar for this view:
            dynamicNavbar: true
         });
      </script>
   </body>
</html>