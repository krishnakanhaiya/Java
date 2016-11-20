<!DOCTYPE html>
<html lang="en">



<head>
<style type="text/css">
.style5 {
	font-size: 40px;
	font-style: italic;
	color:#000033;
	margin-left:-10px;
}
.style6 {
	color: #990000;
	font-size: 20px;
	font-style: italic;
	font-weight: bold;
	margin-left:102px;
	
}
#f
{
padding-left:40px;
padding-top:0px;
text-decoration:none;
text-align:center;
font-family:"Times New Roman", Times, serif;
font-size:16px;
float:inherit;
color:#FFFFFF;
}
.foot
{
padding-top:0px;
padding-left:90px;
text-align:center;
height:25px;
font-family:"Times New Roman", Times, serif;
font-size:18px;
color:#990000;
}
.title3{
float:left;
display:inline;
background-image:url(images/2005-12-08-1920x1200.jpg);
width:325px;
height:34px;
border:1px solid #C7244B;
margin-top:6px;
}


</style>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/skin.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script>
		$(document).ready(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:false,
				prevBu:false,
				nextBu:false,
				playBu:false,
				duration:700,
				preset:'fade',
				pagination:'.pags',
				pagNums:false,
				slideshow:2000,
				numStatus:false,
				banners:false,// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false,
				progressBar:false
			})
			jQuery('#mycarousel').jcarousel({
				horisontal: true,
				wrap:'circular',
				scroll:1,
				easing:'easeInOutBack',
				animation:1000
			});
		});
	</script>
	
</head>
<body>
  <!--==============================header=================================-->
   <div class="navv" style="background:url(images/moving_blue_3d_abstract-2560x1600.jpg); height:1500px; width:1510px;">
 <div class="content" style=" background-image:url(images/nav.png); margin-left:60px; height:1500px; width:1400px;">
  <div class="header">
   <div>
     <div class="nav" style="background:url(images/nav.png);">
        <header>
            <h1><img src="images/logo.jpg" alt="" height="100" width="200" style="margin-left:0px;"></a></h1>
        </header>
            <nav>  
                <ul class="menu">
                    <li class="current li-none"><a href="index1.php">HOME</a></li>
                    <li><a href="about1.php">ABOUT US</a></li>
                    <li><a href="register.php">PROPERTIES</a></li>
                    <li class="li-left li-none"><a href="project.php">GALLERY</a></li>
                    <li><a href="video1.php">VIDEOS</a></li>
                    <li><a href="contact1.php">CONTACT US</a></li>
                </ul>
            </nav>
      </div>
        
        <div id="slide">		
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slider-1.jpg" alt="" width="1400"/></li>
                    <li><img src="images/slider-2.jpg" alt="" width="1400" /></li>
                    <li><img src="images/slider-3.jpg" alt="" width="1400" /></li>
                     <li><img src="images/3.jpg" alt="" height="550" width="1400"/></li>
                      <li><img src="images/4.jpg" alt=""  width="1400"/></li>
                </ul>
         

  

</div>
                
            
            <ul class="pags">
                <li><a href="#"><strong>0</strong>1</a></li>
                <li><a href="#"><strong>0</strong>2</a></li>
                <li><a href="#"><strong>0</strong>3</a></li>
                <li><a href="#"><strong>0</strong>4</a></li>
                <li><a href="#"><strong>0</strong>5</a></li>
            </ul>	
        </div>
    </div>
  </div>   
  
<!--==============================content================================-->
     
        
        <div class="page1-row1 pad-1" style=" height:947px; margin-top:-16px;">
        	 <div class="sidebar" style="float:left; height:847px; width:330px; background:url(images/nav.png); ">
              <div class="h3"></div>
           <div class="h3"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Properties</h2></div>
            <ul class="menu">
                	<li  style="list-style:disc;"><a href="cur1.php" style="font-size:25px;">Current Properties</a></li>
                    <li><a href="comp1.php"  style="font-size:25px; ">Complete Properties</a></li>
                    <li><a href="up1.php" style="font-size:25px;">Upcoming properties</a></li>
                   <li><a href="profile.php"  style="font-size:25px; ">My Account</a></li>
                    <li><a href="logout.php" style="font-size:25px;">Logout</a></li>
                     
                   
                    </ul>
     
            <div id="find" style=" height:200px;margin-top:40px;">
            <div class="h3"></div>
      <div class="h3"> <h2 style=" margin-left:5px;">Find Your Dream Property</h2></div>
    	
       	
       <form name="frmsearch" onSubmit="return searchchk();" action="search.php" method="post" style="margin-left:10px; margin-top:20px;" ><ul>
				 <li>Category:<select name="searchbox">
                 <option>select any one</option>
                 <option>plot</option>
                 <option>shop</option>
                 <option>flat</option>
                 <option>villa</option></select>
                 </li><br />
	              <li>Range:&nbsp;&nbsp;&nbsp;&nbsp;<select name="price" >
                <option>select range</option>
                <option>1000000 to 1500000</option>
                <option>1500000 to 2000000</option><option>2000000 to 2500000</option><option>2500000 to 5000000</option></select></li>
	
                </br>
				 <li><input type="submit" name="search" value="Search" align="center" style="background-color:#03F; height:40px;width:70px; border-radius:10px;"></li>
				 </ul></form>
				<img width="100" height="100" style="margin-left:225px; margin-top: -108px; border-radius: 50px;" src="images/up.jpg"></img>
			</div>
            <div class="h3"></div>
            <div class="h3"><h2 style="font-size:14px;"><p style="font-size:22px; color:#900; margin-top:10px;"> <font color="#FF0000">if you have any question contact us</font></font></p></h2></div>
            <img src="images/Contact_us_logo.png" height="100px" width="100px" style="margin-top:40px;" />
<p><center style="width: 200px; margin-left: 90px; margin-top: -94px; font-size:24px;"> <font size="25px" color="#999999">233/666 north</br>
    chandigarh road,</br>
    khamanono-545</br>
    ph:35254345435</br></font></center></p>
      <div class="h3"></div>
    <video  style="width:330px; height:200px; margin-top:10px;" controls>
    <source src="video/The Aspen by Niblock Homes - New Construction in Charlotte, NC.mp4" type="video/mp4">
    <source src="video/The Aspen by Niblock Homes - New Construction in Charlotte, NC.ogg" type="video/ogg">
</video>
            </div>
           
            
            <div class="rightbar" style=" margin-left:350px;height:834px; width:1050px; background:url(images/nav.png);">
            <div class="gallery-block" style="margin-top:10px;">
            <ul id="mycarousel" class="jcarousel-skin-tango gallery-photo">
            	<li><a href="project.php"><img src="images/aurum.jpg" alt="" height="120" width="250"></a><a href="project.php"><img src="images/comp2.png"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/up5.jpg" alt="" height="120" width="250"></a><a href="project.php"><img src="images/5.jpg" alt=""height="120" width="250"></a></li>
                 <li><a href="project.php"><img src="images/1.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/dda-flat-exchange.jpg" alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/187002_00ccd_1398070124191.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/flat2.jpg" alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/entry.jpg" alt="" height="120" width="250"></a><a href="project.php"><img src="images/7.jpg"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/bath8.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/9.jpg"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/comp5.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/4.png"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/entry.jpg" alt="" height="120" width="250"></a><a href="project.php"><img src="images/7.jpg"alt="" height="120" width="250"></a></li>
                 <li><a href="project.php"><img src="images/Villas-4-3.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/DSC00437.jpg"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/DSC00387.jpg"alt="" height="120" width="250"></a><a href="project.php"><img src="images/plot7.jpg"alt="" height="120" width="250"></a></li>
                <li><a href="project.php"><img src="images/plot3.jpg" alt="" height="120" width="250"></a><a href="project.php"><img src="images/flat4.jpg"alt="" height="120" width="250"></a></li>
            </ul>
        </div>
             <div class="h3" style="margin-left:100px;"><h2><marquee direction="left" behavior="alternate" truespeed><img src="images/bullet_triangle_blue.png" height="35" width="35">Properties For sale</marquee></h2></div>
             <div class="intro" style="height:700px; width:1024px;">
             <h3 class="style6">New Properties for Sales</h3>
    <p class="style6" style="color:#FFCC33; text-decoration:blink;">These are new coming projects </p>
              <div class="res" style="height:143px;width:888px; float:left; margin-left:102px;">
             
             
              <?php include('config.php'); 
$sql= mysql_query('select * from currentproject');

while($data=mysql_fetch_array($sql))
{

 ?>
<div class="new" style="height:143px; width:400px; float:left; margin-left:5px;">
                    <h3><?php echo $data['project_name'];?></h3>
               <div class="img" style=" float:left; height:110px; width:100px;"><img class="image_wrapper fl_image" src="../admin/upload/<?php echo $data['project_image']; ?>" height="100" width="100"/></div>
                    <p class="pp" style="overflow:hidden ; margin-left:115px; font-size:21px;color:#999;height:110px;width:278;"><?php echo $data['project_des'];?><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color:#FF0000"><?php echo $data['price'];?></a></h4></p> </div><?php }?></div>
                   
             
         
	 </br>
   
    <marquee direction="left" style="margin-top:290px;"><a href="index.php"><img src="images/125X125.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/logo-2.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/125X125TL.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/250x70.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/banner_half.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/indirapuram.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/SMElogo.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/ipdlogos.jpg" height="60" width="160"/></a>
    <a href="index.php"><img src="images/karvy.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/omaxelogo.gif" height="60" width="160"/></a>
    <a href="index.php"><img src="images/jp_logo.gif" height="60" width="160"/></a></marquee>
         
        </div>

        </div>
        </div>
        </div>
        <!--==============================footer=================================-->
         <div class="endbar" style="height:100px; margin-left:60px; margin-right:135px; margin-top:-100px; background:url(images/nav.png); width:1398px;">
         <p class="foot" style="margin-left:-50px">Thanks for visiting the site.</p>

<p id="f">@2014 realestate</br>
All rights are reserved by Infowiz-A web solutions</p>
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
    </div>
    </div>
   </body>
</html>