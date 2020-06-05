<!DOCTYPE html>

<html>

<?php
 include($_SERVER['DOCUMENT_ROOT'].'/counter/counter.php');
 ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>YOUR NAME</title>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="ico/favicon.ico"/>
</head>

<body>
	<img id="userPhoto" src="pic/userPhoto.png" alt="User Photo">
    
    <a id="userName">@NICKNAME</a>
    <div id="links">
        <a class="link" href="http://www.linkedin.com" target="_blank">LINKEDIN</a>
        <a class="link" href="http://www.github.com" target="_blank">GITHUB</a>
		<a class="link" href="http://www.instagram.com" target="_blank">INSTAGRAM</a>
		<a class="link" href="http://www.twitter.com" target="_blank">TWITTER</a>
		<a class="link" href="http://www.facebook.com" target="_blank">FACEBOOK</a>
    </div>
</body>

<!--Footer-->
<div id="footer">
<small class="creator">
	Created by <b><i>Ciocca Simone</i></b>
</small>
<small class="users">
	<b>Visitor Statistics:</b><?php echo view_count() ?>
</small>
	<div style="clear: both"></div>
</div>

</html>