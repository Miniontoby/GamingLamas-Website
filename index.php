<?php 

if(isset($_GET["page"])){
	$page = $_GET["page"];
	switch( $page){
		case "twitch":
		case "tw":
		case (preg_match('/tw.*/', $page) ? true : false):
			include("twitch.php");
			break;
		case "youtube":
		case "yt":
		case (preg_match('/yout.*/', $page) ? true : false):
			include("youtube.php");
			break;
		case "discord":
		case "dc":
		case (preg_match('/dis.*/', $page) ? true : false):
			include("discord.php");
			break;
		default:
			if(file_exists($page . ".php")){
				include($page . ".php");
			} else {
				include("main.php");
			}
			break;
		
	}
}else{
	include("main.php");
}
?>
