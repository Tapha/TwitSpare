<?php if (isset($username)) {?>

<!doctype html>

<html>

<head>

<title> TwitSpare - New Account </title>

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
	<div id ="email_address">Step 1: What's Your Email Address Matey?<div id="email_add">We need it to pay you!</div></div>
	<form class="form">  
  
    <p class="email">  
        <input type="text" name="email" id="email" />  
        <label for="email">E-mail</label>  

    <p class="submit">  
        <input type="submit" value="Send" />  
    </p>  
  
</form>  
</body>	
	
	
</html>	


<?php } else {echo "Your not logged in mate.";} ?>