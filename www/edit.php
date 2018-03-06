<!DOCTYPE html>
<html>

   <head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
      <meta name = "apple-mobile-web-app-capable" content = "yes" />
      <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
      <title>Enable form storage</title>
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
		         <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
        
  
  <style>
  
  .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}


  .imgg{
	width:150px;
  }
  .navbar {
      padding-top: 5px;
      padding-bottom: 5px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
      }
      
  .Center{
    margin: auto;
    width: 100px;
    border-radius: 10px;
    border: none;
    margin-left:130px;
    padding: 5px 10px;
    color: aliceblue;
    background-color: darkcyan;
    text-align: center;
}
h4{padding-top:9px;}

.list-block {
    margin: 3px 0;
    font-size: 17px;
}
  
  </style>
   </head>

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
                  
                  <?php

include 'config.php';

$id=$_GET['id'];
$query= $db->query("select * from doctorlist where doctor_id ='$id'");
$rowCount = $query->num_rows;

 
$row = $query->fetch_assoc();

?>
                  
				<div class = "page-content infinite-scroll-content">
                   <form method="post" action="update.php?doctor_id=<?php echo $id;?>" enctype="multipart/form-data"  class = "list-block store-data">
                     <div class="block-title"><center><h3><b>Doctor Profile</b></h3></center></div>
                     <div class = "list-block inset">
               
					    <ul>
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Name</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "Name"  value="<?php echo $row['Name'];?>" placeholder = "Enter your name">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Doctor</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "doctor_id" value="<?php echo $row['doctor_id'];?>"  placeholder = "Enter your id" disabled>
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Age</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "age" value="<?php echo $row['age'];?>"  placeholder = "Enter your age">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Gender</div>
                                    <div class = "item-input">
                                    <input type=radio name="sex" value="MALE" <?php if($row['sex']=="MALE"){echo "checked";}?>>MALE
                                    <input type=radio name="sex" value="FEMALE"<?php if($row['sex']=="FEMALE"){echo "checked";}?>>FEMALE
            
					</td>                    
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">contact</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "Phone" value="<?php echo $row['Phone'];?>"  placeholder = "Enter Phone no">
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">E-mail</div>
                                    <div class = "item-input">
                              <input type = "email" name = "Email_id" value="<?php echo $row['Email_id'];?>"  placeholder = "Enter your e-mail" disabled>
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Services</div>
                                    <div class = "item-input">
                                   
                                       <input type = "text" name = "services" value="<?php echo $row['services'];?>"  placeholder = "services" disabled>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           
						   					   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Designation</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "designation"  value="<?php echo $row['designation'];?>" placeholder = "Enter your designation">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Address</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "Address"  value="<?php echo $row['Address'];?>" placeholder = "Enter your Address">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Qualification</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "qualification" value="<?php echo $row['qualification'];?>"  placeholder = "Enter your qualificaiton">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">experience</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "experience" value="<?php echo $row['experience'];?>" placeholder = "Enter your experience">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Acheivements</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "acheivements" value="<?php echo $row['acheivements'];?>" placeholder = "Enter your Achievement">
                                    </div>
                                 </div>
                              </div>
                           </li>
						   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Description</div>
                                    <div class = "item-input">
                                       <input type = "text" name = "Desciption" value="<?php echo $row['Desciption'];?>" placeholder = "Enter your Desciption">
                                    </div>
                                 </div>
                              </div>
                           </li>
				<li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Password</div>
                                    <div class = "item-input">
                         <input type = "text" name = "password" value="<?php echo $row['password'];?>" placeholder = "Enter your Password">
                                    </div>
                                 </div>
                              </div>
                           </li>		   
						   
                           <li>
                              <div class = "item-content">
                                 <div class = "item-inner">
                                    <div class = "item-title label">Photo</div>
                                    <div class = "item-input">
                                       <input type = "file" name = "photo" placeholder = "choose image">
                                    </div>        
                                 </div>
                              </div>
                           </li>
                        
			</ul></div>
			</br>
			 <input name="submit" type="submit" value="Update" class="col button button-fill button-round button-big">  
			</div>
		                       
                      
                     </form>
                  </div>
               </div>
               
            </div>
         </div>
 
      
      <script type = "text/javascript" 
         src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
         
      <script>
         var myApp = new Framework7();
      </script>
   </body>

</html>