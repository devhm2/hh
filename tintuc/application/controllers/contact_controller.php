<?php 
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	/**
	 * 
	 */
	class Contact_controller extends CI_Controller
	{
		
		public function index()
    {
        return view('welcome_message');
    }
		// public function contact()
		// {
		// 	$this->load->views('news/contact');
		// }
	}
 ?>