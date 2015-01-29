<?php

class Logout extends CI_Controller {
		public function index() 
		{
			session_destroy();
			redirect(base_url()."login");
		}

}