<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="__PUBLIC__/Css/admin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/admin/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/Css/admin/invalid.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__ROOT__/ueditor/themes/default/ueditor.css"/>

<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/facebox.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery.datePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/jquery.date.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_config.js"></script>
<script type="text/javascript" src="__ROOT__/ueditor/editor_all.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/admin/sch.js"></script>
</head>

<body>
	<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="__PUBLIC__/Images/admin/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="#" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="http://www.google.com/" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Articles
					</a>
					<ul>
						<li><a class="current" href="#">Write a new Article</a></li>
						<li><a href="#">Manage Articles</a></li> <!-- Add class "current" to sub menu items also -->
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Pages
					</a>
					<ul>
						<li><a href="#">Create a new Page</a></li>
						<li><a href="#">Manage Pages</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Image Gallery
					</a>
					<ul>
						<li><a href="#">Upload Images</a></li>
						<li><a href="#">Manage Galleries</a></li>
						<li><a href="#">Manage Albums</a></li>
						<li><a href="#">Gallery Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Events Calendar
					</a>
					<ul>
						<li><a href="#">Calendar Overview</a></li>
						<li><a href="#">Add a new Event</a></li>
						<li><a href="#">Calendar Settings</a></li>
					</ul>
				</li>			 
				
			</ul> <!-- End #main-nav -->
					
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content">
			<h2><?php echo ($h1); ?></h2>
			<form action="__URL__/<?php echo ($button_action); ?>" method="post">
				<p style="font-size:17px">Title</p>
				<input type="text" id="txtTitle" name="title" style="width:560px; height:30px; float:left; font-family:Microsoft YaHei; font-size:18px;" maxlength="100" value="<?php echo ($article_item["title"]); ?>"/>
				<br></br><br>
				<p style="font-size:17px; margin-top:10px;">Content</p>
				<div style="display:none;">
					<a href="#" class="close"><img src="__PUBLIC__/Images/admin/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				   <div id="save-notification"></div>
			    </div>
			    <textarea id="myEditor"><?php echo ($article_item["content"]); ?></textarea>
				<!--<script type="text/javascript">
					//var editor = new UE.ui.Editor({
					    //initialContent: '<?php echo ($article_item["message"]); ?>'
					//});
					var editor = new UE.ui.Editor();
					editor.render("myEditor");
				</script>-->
				<br></br>
				<!--隐藏域，保存当前正在编辑文章的id-->
				<input type="hidden" id="article-id"name="id" value="<?php echo ($article_item["id"]); ?>"/>
				<input id="submit-article" class="button" type="submit" value="<?php echo ($button_text); ?>"/>
				<input id="save-article" class="button" type="button" value="Save"/>
			</form>
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
		</div>
	</div>

</body>
</html>