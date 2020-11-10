<!-- <?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Pages extends CI_Controller
{
    public function index()
    {
        return view('welcome_message');
    }
    function __construct(){
    	parent ::__construct();
    }
    public function login($msg = NULL)
    {
    	$data['msg'] = $msg;
    	$this->load->view('news/login' , $data);
    }
    public function process(){
    	$this->load->model('login_model');
    	$result = $this->login_model->validate();
    	if (! $result) {
    		$msg =  '<font color=red>Invalid username and/or password.</font><br />';
    		$this->login($msg);
    	}
    	else {
    		redirect('Home');
    	}
    }
}
 ?> -->
<?php 
     if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    function __construct(){
        parent::__construct();
    }
    public function login(){
        $this->load->view('news/login');
    }
    public function process(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $this->form_validation->set_rules("username", "username", "trim|required");
        $this->form_validation->set_rules("password", "password", "trim|required");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('news/login');
        }else{
            if ($this->input->post('go') == "Login") {
                $usr_result = $this->login_model->selectUser($username, $password);
                if ($usr_result > 0) {
                    $_SESSION['username'] = $username;
                     $_SESSION['loginuser'] = true;

                    redirect("Your_Desired_page");
                }
                else
                {
                     $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid email and password!</div>');
                     redirect('admin');
                }
           }
           else
           {
                redirect('admin');
           }
                }
            }
        }
    }

     ?>