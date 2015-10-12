<?php
// FOR pages on SITE ROOT/public_html/admin
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<?php require_once("../../includes/initialize.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="description" content="Travis Reeder's Administration Page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
        <script src="../script/respond.js"></script>
        
		<link rel="stylesheet" type="text/css" href="../css/index_theme.css"/>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="../ckeditor/ckeditor.js"></script>
        
        <title>Travis' Site - Administration</title>
	</head>
    
    <body style="padding-top: 50px">
        <!--
        <header>
            <div id="headline" class="gradient">
                <img class="avatar" src="../images/img_0047.jpg" alt="Travis Reeder">
                <a href="../admin/index.php"><h2 class="opposite gradient">Welcome to Travis' Site - Administration</h2></a>
            </div>
        </header>
        -->
		
        