<?php
// FOR main Index page SITE ROOT
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<?php require_once("../includes/initialize.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="description" content="Travis Reeder's Home Page UPDATED">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <script src="script/respond.js"></script>
        
		<link rel="stylesheet" type="text/css" href="css/index_theme.css"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>
            $("document").ready(function () {
                
                showsize();
                
                $(window).resize(function () {
                    showsize();
//                    var w = window,
//                    d = document,
//                    e = d.documentElement,
//                    g = d.getElementsByTagName('body')[0],
//                    x = w.innerWidth || e.clientWidth || g.clientWidth,
//                    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
//
//                    $("#example").html(x + ' × ' + y);
                });
            });
            function showsize() {
                var w = window,
                    d = document,
                    e = d.documentElement,
                    g = d.getElementsByTagName('body')[0],
                    x = w.innerWidth || e.clientWidth || g.clientWidth,
                    y = w.innerHeight|| e.clientHeight|| g.clientHeight;

                    $("#example").html(x + ' by ' + y);
            }
        </script>
        <title>Travis' Site</title>
	</head>
    
    <body>
        <!--
        <header>
            <div id="headline" class="gradient">
                <img class="avatar" src="images/img_0047.jpg" alt="Travis Reeder">
                <a href="view_content.php"><h2 class="opposite gradient">Welcome to Travis' Site</h2></a>
 
            </div>
        </header>
        -->
		
        