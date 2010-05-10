<!doctype html>

<html>

<head>

<title> TwitSpare - Do word of mouth advertising on Twitter </title>

<link rel="stylesheet" type="text/css" href="/twitspare/css/style.css"/>

<link rel="shortcut icon" href="/twitspare/images/favicon.ico">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js">
</script>

<script type="text/javascript" src="/twitspare/jquery/jquery.js">
</script>

<script type="text/javascript" src="/twitspare/jquery/script.js">
</script>

<script type="text/javascript">
</script>


	<meta name="Title" content="TwitSpare" />
	
	<meta name="description" content="Do word of mouth advertising on Twitter" />
	
	<meta name="keywords" content="make tweets, make money, advertise on twitter, ads twitter, ads" />
	
	<meta name="Chief Artist" content="Tapha Ngum" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>		
<body id="container">
<div id="header_container">
<div id="header">

	<div id="logo">
	<a href="/"><img src="/twitspare/images/logo.png"></a>
	</div>
	</div>
	<div id="nav_login_area">
	<div id="login_area">
	<div style="float: left; padding: 14px 9px 9px; font-size: 15px;">
	<a href="/twitspare/index.php/oauth" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 15px;">
	<b>Click here to create an account or sign-in</b></a></div>
	<div style="float: right; width: 155px; padding: 9px;"><a id="twitter" href="/twitspare/index.php/oauth/"><img src="/twitspare/images/Sign-in-with-Twitter.png"></a></div>
	<div style="clear: both;"></div>
	 
</div>
<div id= "nav"><a href="/">About   </a> <a href="/">   How It Works</a> <a href="/">    Founder</a> <a href="/">   FAQ</a> <a href="/">    Contact Us</a></div>
</div>
<div id="earnings"></div>	
	</div>	
	</div>
	<div id = "arrow"></div>
	<div id= "body_container">
	

	
	<div id="body_content">
			
				<h2 id="intro">We help you do word of mouth advertising on twitter by connecting you to the conversation</h2>
				<h3 id="mini_intro">If your a regular twitter user, you can earn money per click and you get to make the messages you tweet. (We trust you<!--<img src="http://www.mazeguy.net/happy/veryhappy.gif">-->)                       (<a href="/">How much can my account earn?</a>)</h3>  
			</div>

	<div id="main_body">

				<h1 id="body_recent"><a id = "recents" href="/twitspare/recent/">Recent Messages</a></h1> 
				<h2 id="body_recent_under">Ad messages recently tweeted</h2>
				<h3 id="recent_tweets"> <?php
										$this->load->library('misc');
										
										$number = 0;
										
										foreach($results->results as $number => $result){
								
								         //print_r($number);
								
										//
									
											
										
											 echo '<div id="twitter_status">';
											 echo '<img src="'.$result->profile_image_url.'" id="twitter_image">';
											 $text_n = Misc::toLink($result->text, $result->id, $result->from_user); 
											 echo $text_n;
											 echo '<div class="twitter_small">';
											 echo '<strong>From:</strong> <a href="http://www.twitter.com/'.$result->from_user.'">'.$result->from_user.'</a>: ';
											 echo '<strong>at:</strong> '.$result->created_at;
											 echo '</div>';
											 echo '</div>';	
											 
										
										
										
										}
										//}
										?>	
	</h3>	
	</div>	
	</div>
	<div id="footer">
	</div>
</body>	
</html>