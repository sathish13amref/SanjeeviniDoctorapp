<!DOCTYPE html>
<html>

   <head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
      <meta name = "apple-mobile-web-app-capable" content = "yes" />
      <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
      <title>Inset</title>
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
   </head>

   <body>
      <div class = "views">
         <div class = "view view-main">
            <div class = "pages">
               <div data-page = "home" class = "page navbar-fixed">
                  <div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"> </div>
                        <div class = "center">Form Elements</div>
                        <div class = "right"> </div>
                     </div>
                  </div>
                                       <form name="form1" id="form1" action="" method="post">
                  
                  <div class = "page-content">
                     <div class = "content-block-title">Inset</div>
                     <div class = "list-block inset">
                     

                        <ul>
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type = "text" placeholder = "Enter your name">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type = "email" placeholder = "Enter your e-mail">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-input">
                                       <input type = "password" placeholder = "Enter your password">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <!-- <input type="submit"> as button -->
			<input type="submit" class="button" name="submit" value="Send">
                           
                        </ul>

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

</html>