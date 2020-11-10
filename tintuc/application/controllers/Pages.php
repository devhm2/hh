<?php 
// if (!defined('BASEPATH'))
//     exit('No direct script access allowed');
// class Pages extends CI_Controller
// {
//     public function index()
//     {
//         return view('welcome_message');
//     }
//     function __construct(){
//     	parent ::__construct();
//     }
//     public function login($msg = NULL)
//     {
//     	$data['msg'] = $msg;
//     	$this->load->view('news/login' , $data);
//     }
//     public function process(){
//     	$this->load->model('login_model');
//     	$result = $this->login_model->validate();
//     	if (! $result) {
//     		$msg =  '<font color=red>Invalid username and/or password.</font><br />';
//     		$this->login($msg);
//     	}
//     	else {
//     		redirect('Home');
//     	}
//     }
// }
 ?> 


<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('login_model','',TRUE);
 }

 function login()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('news/login');
   }
   else
   {
     //Go to private area
     redirect('news/news_temp', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->users->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}


 ?>