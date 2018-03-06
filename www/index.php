<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
    <meta name = "apple-mobile-web-app-capable" content = "yes" />
    <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
	<link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
    <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
</head>
<style>
.imgg{
width:150px;
}
</style>
<body>
<div class = "views">
    <div class = "view view-main">
        <div class = "pages">
            <div data-page = "home" class = "page navbar-fixed">
                <div class = "navbar">
                    <div class = "navbar-inner">
                        <div class = "left"> </div>
                       <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"> </div>
                    </div>
                </div>
<form action="insert.php" method="post" style="border:1px solid #ccc">
					
					<div class = "page-content">
					<center><div class = "item-title label"><h1><font color = "green">Login</font></h1></div></center>
					<div class = "list-block inset">
                        <ul>
							
                          
					
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Email</div>
										<div class = "item-input">
										<input type="text" placeholder="Enter Email" name="Email_id" required>
										</div>
									</div>
								</div>
							</li>
                           
		
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Password</div>
										<div class = "item-input">
											<input type="password" placeholder="Enter Password" name="password" required>
										</div>
									</div>
								</div>
							</li>
						   
                           
                       
                        </ul>
                        </div>
                   
                     
                    </div></br>
					<input type="submit" name="submit" class = "button button-fill button-round color-green form-to-json" value="Sign IN" >
				
                </form>
				
		</div>
            </div>
         </div>
      </div>
</body>