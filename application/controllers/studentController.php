<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Modstudent');

	
	}

	public function index()
	{
		//$this->load->helper('test');
	   //  abc();       call pr show hota hy

//extends helpers
		$this->load->helper('array');
	     $arr= ['abc'=>'ABC','hussain' => 'HUssain'];
		 echo element('abc',$arr ,'NOT FOUND');


		// $this->load->library('demo');                     load in auto load
		// $this->demo->abcd();
		// $this->demo->xyz();
//get_instance		// $this->demo->showme();



		// extends libaray
		  $this->load->library('email');
	// $this->email->aaa();
	  // $this->email->exte_libar();
        $this->load->view('AR/helperPractice');
	}

	public function login()
	{
		
	
        $this->load->view('AR/studentlogin');
	}
    public function category(){

}
// public function loginAdmin()
// {
//     $data['email'] = $this->input->post('email');
//     $data['password'] = md5($this->input->post('password'));

//     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//     $this->form_validation->set_rules('password', 'Password', 'required');

//     if ($this->form_validation->run() === false) {
//         // Redirect back to the login page with validation errors
//         $this->load->view('AR/studentlogin');
//     } else {
//         $user = $this->Modstudent->logadmin($data);

//         if (count($user) == 1) {
//             $user_data = array(
//                 'id' => $user[0]['id'],
//                 'email' => $user[0]['email'],
//                 'first_name' => $user[0]['first_name'],
//                 'user_name' => $user[0]['user_name'],
//                 'confirm_password' => $user[0]['confirm_password']
//             );

//             $this->session->set_userdata($user_data);

//             // Redirect to the desired controller/method after successful login
//             redirect('admin/Student');
//         } else {
//             $this->session->set_flashdata('error', 'Email and password do not match');
//             redirect('studentController/index');
//         }
//     }
// }


// public function loginAdmin()
// {
//     $data['email'] = $this->input->post('email');
//     $plain_password = $this->input->post('password');

//     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//     $this->form_validation->set_rules('password', 'Password', 'required');

//     if ($this->form_validation->run() === false) {
//         // Redirect back to the login page with validation errors
//         $this->load->view('AR/studentlogin');
//     } else {
//         $user = $this->Modstudent->logadmin($data);

//         if (count($user) == 1 && password_verify($plain_password, $user[0]['password'])) {
//             $user_data = array(
//                 'id' => $user[0]['id'],
//                 'email' => $user[0]['email'],
//                 'first_name' => $user[0]['first_name'],
//                 'user_name' => $user[0]['user_name'],
//                 'confirm_password' => $user[0]['confirm_password']
//             );

//             $this->session->set_userdata($user_data);

//             // Redirect to the desired controller/method after successful login
//             redirect('admin/Student');
//         } else {
//             $this->session->set_flashdata('error', 'Email and password do not match');
//             redirect('studentController/index');
//         }
//     }
// }



public function loginAdmin()
{
$data['email']=$this->input->post('email');
$data['password']=md5($this->input->post('password'));

$this->form_validation->set_rules('email','Email','required|valid_email');
$this->form_validation->set_rules('password','Password','required');

if(  $this->form_validation->run()===false)
{
   $this->load->view('admin/Student');
}

else
{
$user = $this->Modschool->logadmin($data);

if (count($user) == 1) {
$for = [
	'id' => $user[0]['id'],
	'email' => $user[0]['email'],
	'first_name' => $user[0]['first_name'],
	'user_name' => $user[0]['user_name'],
	'password' => $user[0]['password'],
	'confirm_password' => $user[0]['confirm_password']
];

$this->session->set_userdata($for);

if ($this->session->userdata('id')) { // Corrected line
	redirect('admin/Student');
} else {
	echo 'session is not created';
}
} else {
$this->session->set_flashdata('error', 'email and password not match');
redirect('admin/login');
}

}
}
}




