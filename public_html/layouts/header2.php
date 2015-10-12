<?php
// FOR pages on SITE ROOT/public
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<?php require_once("../includes/initialize.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="description" content="Travis Reeder's Home Page">
        <meta name="viewport" content="width=device-width">
        
		<link rel="stylesheet" type="text/css" href="../public_html/css/index_theme.css"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <title>Travis' Site</title>
	</head>
    
    <body>
        <header>
            <div id="headline" class="gradient">
                <img class="avatar" src="../public_html/images/img_0047.jpg" alt="Travis Reeder">
                <a href="view_content.php"><h2 class="opposite gradient">Welcome to Travis' Site</h2></a>
            </div>
        </header>
		
        