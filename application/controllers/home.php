<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	public function index()
	{
		
		//Load Twitter Library for use
		
		$this->load->library('twitter');
		
		//Query for last 20 submitted links
		
		$query = $this->db->query("SELECT * FROM sent_ads ORDER BY ads_id DESC LIMIT 0, 5");
		
		foreach($query->result() as $link)
		
		{
		
			$bitly_query[] = $link->link;	
		
		}
		
		$bit_ly_links = implode($bitly_query);
	
		$results = $this->twitter->search('search', array('q' => "$bit_ly_links", 'rpp' => "5"));
		
		//Get data needed
		
		$data['results'] = $results;
		
		$this->load->view("home",$data);
		
		
	}
}