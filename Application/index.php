<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "fastiandevloper";
    $dbname = "trasnsport buddy";
    $db = mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db("transport buddy",$db);
	
	 $var=" ";
	  $Name=$_POST['name'];
	  $Source=$_POST['source'];
	  $Dest=$_POST['destination'];
	  $mobile=$_POST['mobile'];
	  $minFare=$_POST['min'];
	  $maxFare=$_POST['max'];
	$quer="SELECT phoneNo,name FROM USER where name='$Name' AND phoneNo=$mobile;";
	if(mysql_query($quer)){
		
	}
	
	$var=$Name." ".$Source." ".$Dest." ".$mobile." ".$minFare." ".$maxFare;
	
	
 
?>



<?PHP




require_once 'twitteroauth.php';
define("CONSUMER_KEY", "RtHH3reDC4p0pHMwhizEUvTWo");
define("CONSUMER_SECRET", "pNqX97cHarJWQUrJInjlxWob2WYoYR2y1MnsgSEK7qfpXp07Js");
define("OAUTH_TOKEN", "4120143615-oiDqOKNUYNRFySqp0i0dKW3xGb4cMXfXOyiLJXu");
define("OAUTH_SECRET", "UuxiFNvN1i0JmfLvxXZuFMAsiZjx4bA8roZ3oRMSLQ1gA");
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
$content = $connection->get('account/verify_credentials');
$connection->post('statuses/update', array('status' => $var));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">
   <link rel="stylesheet" href="dist/css/bootstrap-select.min.css">
    <link rel="text/script" href="dist/js/bootstrap-select.js">
  <style>
body{
background-image:url('new.png');
background-repeat:no-repeat;
background-size:cover;
}
    
</head>
    
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  <a class="navbar-brand" href="#"><img src="Drawing.png" style="height:30px;width:80px;" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="main.php">Home</a></li>
        <li><a href="web/about.html">About</a></li>
        <li><a href="#">Contact</a></li> 

      </ul></nav></div>
     

    
    
</body>    
    

    
    
