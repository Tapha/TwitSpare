<?php class DateIntervalFormat
{
    /**
     * Format an interval value with the requested granularity.
     *
     * @param integer $timestamp The length of the interval in seconds.
     * @param integer $granularity How many different units to display in the string.
     * @return string A string representation of the interval.
     */
    public function getInterval($timestamp, $granularity = 2)
    {
        $seconds = time() - $timestamp;
        $units = array(
            '1 year|:count years' => 31536000,
            '1 week|:count weeks' => 604800,
            '1 day|:count days' => 86400,
            '1 hour|:count hours' => 3600,
            '1 min|:count min' => 60,
            '1 sec|:count sec' => 1);
        $output = '';
        foreach ($units as $key => $value) {
            $key = explode('|', $key);
            if ($seconds >= $value) {
                $count = floor($seconds / $value);
                $output .= ($output ? ' ' : '');
                if ($count == 1) {
                    $output .= $key[0];
                } else {
                    $output .= str_replace(':count', $count, $key[1]);
                }
                $seconds %= $value;
                $granularity--;
            }
            if ($granularity == 0) {
                break;
            }
        }

        return $output ? $output : '0 sec';
    }
}?>
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
<!--<div id="twitspare_premium"><a id="premium_logo" href="/twitspare/index.php/premium/"><img src="/twitspare/images/premium_logo.png"</a></div>--> 
<div id= "nav"><a href="/">About   </a> <a href="/">   How It Works</a> <a href="/">    Founder</a> <a href="/">   FAQ</a> <a href="/">    Contact Us</a></div>
</div>
<div id="earnings"></div>	
	</div>	
	</div>
	<div id = "arrow"></div>
	<div id= "body_container">
	

	
	<div id="body_content">
			
				<h2 id="intro">We help you do word of mouth advertising on twitter by connecting you to the conversation</h2>
				<h3 id="mini_intro">If your a regular twitter user, you can earn money per click and you get to make the messages you tweet. (We trust you<!--<img src="http://www.mazeguy.net/happy/veryhappy.gif">-->)                       <span id ='earn'> <a  href="/">How much can my account earn?</a></span></h3>  
			</div>

	<div id="main_body">

				<h1 id="body_recent"><a id = "recents" href="/twitspare/recent/">Recent Messages</a></h1> 
				<div id="box_how"><a id="how_it_works_main" href="/how_it_works">How It Works</a><span id="how_it_works_mini">It's really, really easy</span> 
				
				<h2 id="body_recent_under">Ad messages recently tweeted</h2>
				<h3 id="recent_tweets"> <?php
										
										foreach($results->results as $result){
										echo '<div id="twitter_status">';
										echo '<img src="'.$result->profile_image_url.'" class="twitter_image">';
										$text_n = $result->text; 
										echo "<div id='text_twit'>".$text_n."</div>";
										echo '<div id="twitter_small">';
										echo "<span id='link_user'".'<a href="http://www.twitter.com/'.$result->from_user.'">'.$result->from_user.'</a></span>';
										$date = $result->created_at;
										
										$dateFormat = new DateIntervalFormat();
										
										$time = strtotime($result->created_at);
										
										echo "<div class='time'>";
										
										print sprintf('Submitted %s ago',  $dateFormat->getInterval($time));
										
										echo '</div>';
										
										echo "</div>";
										echo "</div>";
										}
										
										
										
										
										?>	
	</h3>	 
	
	
	</div>
	<div id="how">
	<div id="find"><img id="find_image" src="http://localhost/twitspare/images/news-128.png"><a id="find_text" href="/"><strong id="find_bold">Find interesting things</strong>View interesting information, links, videos, articles, etc from businesses wanting to get their message out.</div>
	<!--<div id="comment_vote"><img id="vote_image" src="http://localhost/twitspare/images/data-64.png"><a id="find_text" href="/"><strong id="find_bold">Find interesting things</strong>View interesting information, links, videos, articles, etc from businesses wanting to get their message out.</div>
-->
	</div>
	</div>
  			
	</div>
	<div id="footer">
	</div>
</body>	
</html>