<?php

Class Logout extends Controller

{

	 function Logout()
	 
			 {
				parent::Controller();	
			 }	
			 
			 
	function index()

			 {
			 
				//The Session Lib instantiation.
			 
				$this->load->library('session');
				
				//Destroy the users session.
				
				$this->session->sess_destroy();
				
				//Take user back to home
				
				$this->load->view('home');
				
			 }

}