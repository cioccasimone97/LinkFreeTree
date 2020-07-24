<!DOCTYPE html>

<html>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/counter/counter.php');
include($_SERVER['DOCUMENT_ROOT'].'/function/UserInfo.php');
 ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Simone Ciocca</title>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="ico/favicon.ico"/>
</head>


<!--Header-->
<div class="header">
	<small>
		<b>IP: </b><?= UserInfo::get_ip();?> || <b>OS: </b><?= UserInfo::get_os();?> (<?= UserInfo::get_device();?>) || <b>Browser: </b><?= UserInfo::get_browser();?>
	</small>
</div>



<body>
	<img id="userPhoto" src="pic/userPhoto.jpg" alt="User Photo">
    
    <a id="userName">@cioccasimone97</a>
	<div id="links">
		<div class="splitCV">
			<div>
				<a class="link" href="https://<LINK>/PDF/Curriculum_Vitae.pdf" download="" target="_blank">Curriculum Vitae</a>
			</div>
		</div>
			<a class="link" href="http://www.linkedin.com" target="_blank">LINKEDIN</a>
			<a class="link" href="http://my.indeed.com" target="_blank">INDEEED</a>
			<a class="link" href="http://www.github.com" target="_blank">GITHUB</a>
		<div class="split3">
			<div>
				<a class="link" href="http://www.instagram.com" target="_blank">INSTAGRAM</a>
			</div>
			<div>
				<a class="link" href="http://www.twitter.com" target="_blank">TWITTER</a>
			</div>
			<div>
				<a class="link" href="http://www.facebook.com" target="_blank">FACEBOOK</a>
			</div>
		</div>
	</div>
</body>


<!--Footer-->
<div class="footer">
	<small class="creator">
		Created by <b><i>Ciocca Simone</i></b>
	</small>
	<small class="users">
		<b>Visitor Statistics:</b><?php echo view_count() ?>
	</small>
	<div style="clear: both"></div>
</div>



</html>