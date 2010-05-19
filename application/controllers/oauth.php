<?php

class Oauth extends Controller {

	function Oauth()
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
		
		//Get user details
		
		//Get the credentials from twitter
		
		$user_credentials = $this->twitter->call('account/verify_credentials');
		
		//Get Twitter Values
		
		//The Twitter User Name 
		
		$data['name'] = $user_credentials->name;
		
		//The Twitter Username
		
		$data['username'] = $user_credentials->screen_name;
		
		//The Twitter Location:
		
		$data['location'] = $user_credentials->location;
		
		//The Twitter Description
		
		$data['desc'] = $user_credentials->description;
		
		//The Twitter Image
		
		$data['image'] = $user_credentials->profile_image_url;
		
		//The Twitter Follower Count
		
		$data['followers'] = $user_credentials->followers_count;
		
		//The Twitter Updated status count
		
		$data['status_count'] = $user_credentials->statuses_count;
		
		//The Twitter Url
		
		$data['user_url'] = $user_credentials->url;
		
		//The Twitter Users ID to match against DB
		
		$data['users_id'] = $user_credentials->id;
		
		//Load database library
		
		//Check if user id already exists.  If so Load the users homepage and store id in a session the redirect to user account view. If not create a new user id in the database and copy. Then redirect to user view//
		
		$query = $this->db->query("SELECT * FROM user WHERE twitter_user_id = {$data['users_id']} LIMIT 1");
		
		$row = $query->row();
		
		if (isset($row->twitter_user_id))
		
		{
		
		$db_user_id = $row->twitter_user_id;
		
		//Check against verified user id
		
		$user_id = $data['users_id'];
		
		}
		
		else
		
		{
		
		$user_id = 0;
		
		$db_user_id = 1;
		
		}
		
		if ( $user_id == $db_user_id )

				{
				
					//Load view("user_account")
					

					
					//Load Base_URL
					
					$this->load->helper('url');
					
					$data['base'] = base_url()."index.php/";
					
					//Load->View
					
					$this->load->view('user_account', $data);
				
				}
		
		else
		
				{
			
					$username = $data['username'];
					
					//Create a user account & then redirect to view
					
					//Insert the twitter user id into the database
					
					$query = $this->db->query("INSERT INTO user VALUES ('','$user_id','$username','','')");
					
							//Get the subject that have over 100 uses
		
					$query_2 = $this->db->query("SELECT * FROM twitspare_tags WHERE used_number >= 100 LIMIT 10");
					
					//Get
					
					foreach($query_2->result() as $tag)
					
					{
						
						$tags_interesting[] = $tag->ads_tag_name;
						
					}
					
					$data['tags'] = $tags_interesting;
		
		

					//Load user_account view
					
					$this->load->view('user_account_new', $data);
					
				}
		
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