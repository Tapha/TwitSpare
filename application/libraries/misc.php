<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php

Class Misc extends Controller

{

function toLink($text, $status_id, $user){

$link_back_to_tweet = "<a href='http://www.twitter.com/".$user."/status/".$status_id.">".$text."</a>";

return $link_back_to_tweet;

}

}


?>