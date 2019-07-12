<!DOCTYPE html>
 <html> 
    <head>
        <meta charset="utf-8">
        <title>Welcome To Railway Reservation System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="bg">
    	<script>
        var botmanWidget = {
            frameEndpoint: '../main.html',
            introMessage: 'Hello, I am a Chatbot',
            chatServer : 'chat.php', 
            title: 'Ask Us', 
            mainColor: '#456765',
            bubbleBackground: '#dd76f4',
            aboutText: '',
            bubbleAvatarUrl: '',
        }; 
    </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
	
		<div class="container">
		
		
			<div class="row">
			  <div class="col-md-12">
				<img src="img/rail1.jpg" alt="Smiley face" style="width:98%">
			  </div>
			  <div class="col-md-12 mainmenu">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <ul class="nav navbar-nav">
				    <?php $d="fsefw"; ?>
				      <li><a href="index.php">Home</a></li>
				      <li><a href="user/view_schedule.php">Train info</a></li>
				      <!-- <form action="user/login.php" method="post">
  					  <button type="submit" name="id" value='<?php echo $d; ?>' class="btn-link">Go</button>
					  </form> -->
				      <li><a href="user/login.php?id=<?php echo $d; ?>">User</a></li>
				      <li><a href="admin/login.php?id1=<?php echo $d; ?>">Admin</a></li>
				      <li><a href="user/register.php">Sign up</a></li>
					  <li><a href="user/live.php">Train Status</a></li>
					  <li><a href="user/arrivals.php">Train Arrivals</a></li>
				    </ul>
				  </div>
				</nav>
			  </div>