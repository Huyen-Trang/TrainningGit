<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "
http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/bnews/function/dbconnect.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaEnter EDU - Admin template</title>
        <link rel="stylesheet" type="text/css" href="/bnews/templates/admin/css/styles.css" media="screen" />
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
                    	<ul class="user-pro">
							<li><a href="loguot.php">Logout</a></li>
							<li>Chào, <a href="profile.php">admin</a></li>
                    	</ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                                <li><a href="profile.php">Tài khoản</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="/bnews/admin/news/index.php">Tin tức</a></li>
                            <li><a href="/bnews/admin/category/index.php">Danh mục</a></li>
							<li><a href="/bnews/admin/user/index.php">User</a></li>
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">