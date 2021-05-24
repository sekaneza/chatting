<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:700,
		pauseTime:2500,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.6, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" href="images/browertitle.png" type="image" />
<link rel="shortcut icon" href="images/browertitle.png" type="image" />
<!--<link href="templatemo_style.css" rel="stylesheet" type="text/css" />-->
		<title> INTRANET MAILING CLIENT SYSTEM</title>
	</head>
	<body>
	<div id="logo12"></div>
	<div id="title"></div>
		<div id="page">
			<header>
				<div id="principal_title">
					<h1 align="center" style="float:center"></h1>
				<nav class="main-menu">
					<ul>
						<li><a href="index.php"
<?php
	if($_SERVER['PHP_SELF']=="/index.php"){
		echo 'class="current-menu"';
	}
?>                >home</a></li>
						<li><a href="loginpage.php"
<?php
	if($_SERVER['PHP_SELF']=="/loginpage.php"){
		echo 'class="current-menu"';
	}
?>                >New Account</a></li>
						<li><a href="aboutus.php"
<?php
	if($_SERVER['PHP_SELF']=="/aboutus.php"){
		echo 'class="current-menu"';
	}
?>                >about us</a></li>
						<li><a href="comment.php"
<?php
	if($_SERVER['PHP_SELF']=="/comment.php"){
		echo 'class="current-menu"';
	}
?>                >contact us</a></li>
    <a href="javascript:myfunction1();(<?php echo $rows['passengerid']?>)" onClick="javascript:myfunction1();">ADMIN</a></li>

<!--<li onClick="javascript:myfunction1()"><a href="admin.php"
<?php 
	if($_SERVER['PHP_SELF']=="/admin.php"){
		echo 'class="current-menu"';
	}
?>            >Admin</a></li>-->
					</ul>
				</nav>
			</header>
					<!--<img src="images/1.jpeg" alt="" />-->
					<!--<img src="images/99.jpg">-->
					<div id="slider">
			    <a href="#"><img src="images/verygood.jpg" alt="Image 1" title="WELCOME TO G.S TRINITE INTRANET. " /></a>
                <a href="#"><img src="images/1.jpg" alt="Image 2" title="G.S TRINITE System" /></a>
				<a href="#"><img src="images/2.png" alt="Image 3" title="Our system Structure." /></a>
                <a href="#"><img src="images/3.jpg" alt="Image 4" title="G.S Trinite ." /></a>
                <a href="#"><img src="images/4.jpg" alt="Image 5" title="Mail Client server." /></a>
                <a href="#"><img src="images/5.jpg" alt="" title="G.s Trinite" /></a>
			    <a href="#"><img src="images/wda.jpg" alt="Image 6" title="WorkForce Development Authority. " /></a>
                <a href="#"><img src="images/99.jpg" alt="Image 7" title="STRUCRURE SYSTEM." /></a>
                <a href="#"><img src="images/lab.jpg" alt="Image 8" title="G.S TRINITE INTRANET. " /></a>
				<a href="#"><img src="images/nnationl.jpg" alt="Image 10" title="OUR NATION FLAG. " /></a>
            	<a href="#"><img src="images/good.jpg" alt="Image 9" title="student. " /></a>
				<a href="#"><img src="images/lab2.jpg" alt="Image 12" title="This Intranet System. " /></a>
				<a href="#"><img src="images/MIXMORE.JPG" alt="Image 14" title="MIXMORE. " /></a>
                <a href="#"><img src="images/goodwelcome.jpg" alt="Image 15" title="G.S TRINITE INTRANET. " /></a>
				</div>
					 <div id="computer_image">
				<div id="computer_description">  
            	      	</div>
				</div>
			<section>
<section>
<script>
function myfunction(a)
{
window.open("admin.php?idpass="+a,"_blank","top=200,height=600,width=1000,left=200");
}
function myfunction1()
{
var a=1;
window.open("admin.php?idpass="+a,"_blank","top=200,height=600,width=1000,left=200");
}  
</script>