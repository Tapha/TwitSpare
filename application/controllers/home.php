<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	public function index()
	{
		// This is how we do a basic auth:
		// $this->twitter->auth('user', 'password');
	
		// Fill in your twitter oauth client keys here
	
		$consumer_key = 'OAWfaZLsUsCx0ijHKNDWtQ';
		$consumer_key_secret = '4TifEC4BOdPFIJByWcVJYkATYQVNCwDCTZvTLuDGs';

		// For this example, we're going to get and save our access_token and access_token_secret
		// in session data, but you might want to use a database instead :)
		
		$this->load->library('session');
		
		$tokens['access_token'] = NULL;
		$tokens['access_token_secret'] = NULL;

		// GET THE ACCESS TOKENS
		
		$oauth_tokens = $this->session->userdata('twitter_oauth_tokens');

		if ( $oauth_tokens !== FALSE ) $tokens = $oauth_tokens;

		$this->load->library('twitter');

		$auth = $this->twitter->oauth($consumer_key, $consumer_key_secret, $tokens['access_token'], $tokens['access_token_secret']);

		if ( isset($auth['access_token']) && isset($auth['access_token_secret']) )
		{
			// SAVE THE ACCESS TOKENS
		
			$this->session->set_userdata('twitter_oauth_tokens', $auth);

			if ( isset($_GET['oauth_token']) )
			{
				$uri = $_SERVER['REQUEST_URI'];
				$parts = explode('?', $uri);

				// Now we redirect the user since we've saved their stuff!

				header('Location: '.$parts[0]);
				return;
			}
		}

		// This is where  you can call a method.

		//$this->twitter->call('statuses/update', array('status' => 'Testing CI Twitter oAuth sexyness by @elliothaughin'));

		// Here's the calls you can make now.
		// Sexy!
		
		/*
		$this->twitter->call('statuses/friends_timeline');
		$this->twitter->search('search', array('q' => 'elliot'));
		$this->twitter->search('trends');
		$this->twitter->search('trends/current');
		$this->twitter->search('trends/daily');
		$this->twitter->search('trends/weekly');
		$this->twitter->call('statuses/public_timeline');
		$this->twitter->call('statuses/friends_timeline');
		$this->twitter->call('statuses/user_timeline');
		$this->twitter->call('statuses/show', array('id' => 1234));
		$this->twitter->call('direct_messages');
		$this->twitter->call('statuses/update', array('status' => 'If this tweet appears, oAuth is working!'));
		$this->twitter->call('statuses/destroy', array('id' => 1234));
		$this->twitter->call('users/show', array('id' => 'elliothaughin'));
		$this->twitter->call('statuses/friends', array('id' => 'elliothaughin'));
		$this->twitter->call('statuses/followers', array('id' => 'elliothaughin'));
		$this->twitter->call('direct_messages');
		$this->twitter->call('direct_messages/sent');
		$this->twitter->call('direct_messages/new', array('user' => 'jamierumbelow', 'text' => 'This is a library test. Ignore'));
		$this->twitter->call('direct_messages/destroy', array('id' => 123));
		$this->twitter->call('friendships/create', array('id' => 'elliothaughin'));
		$this->twitter->call('friendships/destroy', array('id' => 123));
		$this->twitter->call('friendships/exists', array('user_a' => 'elliothaughin', 'user_b' => 'jamierumbelow'));
		$this->twitter->call('account/verify_credentials');
		$this->twitter->call('account/rate_limit_status');
		$this->twitter->call('account/rate_limit_status');
		$this->twitter->call('account/update_delivery_device', array('device' => 'none'));
		$this->twitter->call('account/update_profile_colors', array('profile_text_color' => '666666'));
		$this->twitter->call('help/test');
		*/
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/home.php */