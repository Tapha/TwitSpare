<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	public function index()
	{
		$this->load->view("home");
	}
}