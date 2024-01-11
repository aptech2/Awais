<?php

class Admin extends CI_Controller

{




/**
 * Summary of __construct
 */
public function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');

}


public function sendmessage(){

    $this->load->view('Admin/message');



}









    /**
     * 
     * @return void
     */
    public function index()
    {
       if(
           $this->session->userdata('id')){

         $this->load->view('Admin/header');
        $this->load->view('Admin/navtop');
        $this->load->view('Admin/navleft');
        $this->load->view('Admin/dashboard');
        $this->load->view('Admin/footer');
           }
           else{
               $this->session->set_flashdata('error','please login first');
               redirect('admin/login');
           }

    }

    public function logout()
    {
     if($this->session->userdata('id')){
        $this->session->unset_userdata('id');
      $this->session ->sess_destroy();
  redirect('admin/login') ;     
     }



     $this->load->view('login');
    }


    public function login()

    {
        $this->load->helper('test');
     $this->load->view('login');
    }




    public function loginAdmin()
    {
   $data['email']=$this->input->post('email');
   $data['password']=md5($this->input->post('password'));

   $this->form_validation->set_rules('email','Email','required|valid_email');
   $this->form_validation->set_rules('password','Password','required');

 if(  $this->form_validation->run()===false)
 {
       $this->load->view('login');
 }

  else
  {
    $user = $this->Modschool->logadmin($data);

if (count($user) == 1) {
    $for = array(
        'id' => $user[0]['id'],
        'email' => $user[0]['email'],
        'name' => $user[0]['name']
    );

    $this->session->set_userdata($for);

    if ($this->session->userdata('id')) { // Corrected line
        redirect('admin');
    } else {
        echo 'session is not created';
    }
} else {
    $this->session->set_flashdata('error', 'email and password not match');
    redirect('admin/login');
}

  }
    }

// categoryMethod
public function category()
{
if($this->session->userdata('id')){
    $data=array();
    $data ['user']=$this->Modschool->viewdata();
    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/category',$data);
    $this->load->view('Admin/footer');
       }
       else {
        $this->session->set_flashdata('error','please fill all fields');
        redirect('admin/login');    
       }
}

//status update
 public function status($id){
    $data['status']=0;
    $this->db->where('id',$id);
    
    $result=$this->db-> update('cate',$data);
    if($result==1){
        $this->session->set_flashdata('success','record Active sucess fully');
        redirect('admin/category');    
    }
        else{
            $this->session->set_flashdata('danger','record added are not');
        redirect('admin/category'); 
        }
}

///deActive

public function destatus($id){
    $data['status']=1;
    $this->db->where('id',$id);
    $result=$this->db-> update('cate',$data);
    if($result ==1){
        $this->session->set_flashdata('sucess','record DEActive sucess fully');
        redirect('admin/category');    
    }
        else{
            $this->session->set_flashdata('dangers','record nno deactive are not');
        redirect('admin/category'); 
        }
}

/////stats class
//status update
public function status_class($id){
    $data['status']=0;
    $this->db->where('id',$id);
    
    $result=$this->db-> update('class',$data);
    if($result==1){
        $this->session->set_flashdata('success','record Active sucess fully');
        redirect('admin/class');    
    }
        else{
            $this->session->set_flashdata('danger','record added are not');
        redirect('admin/class'); 
        }
}

///deActive

public function destatus_class($id){
    $data['status']=1;
    $this->db->where('id',$id);
    $result=$this->db-> update('class',$data);
    if($result ==1){
        $this->session->set_flashdata('sucess','record DEActive sucess fully');
        redirect('admin/class');    
    }
        else{
            $this->session->set_flashdata('dangers','record nno deactive are not');
        redirect('admin/class'); 
        }
}


////update course

public function status_course($id){
    $data['status']=0;
    $this->db->where('id',$id);
    $result=$this->db-> update('course',$data);
    if($result==1){
        $this->session->set_flashdata('success','record Active sucess fully');
        redirect('admin/cousre');    
    }
        else{
            $this->session->set_flashdata('danger','record added are not');
        redirect('admin/cousre'); 
        }
}

///deActive course

public function destatus_course($id){
    $data['status']=1;
    $this->db->where('id',$id);
    $result=$this->db-> update('course',$data);
    if($result ==1){
        $this->session->set_flashdata('sucess','record DEActive sucess fully');
        redirect('admin/cousre');    
    }
    else{
        $this->session->set_flashdata('dangers','record nno deactive are not');
    redirect('admin/cousre'); 
    }
}
















public function addcategorys(){
    $this->form_validation->set_rules('name','Entercateory name','required');
    if($this->form_validation->run()== true){
        $data['name']=$this->input->post('name');
        $insert=$this->Modschool->insertcategory($data);
        echo json_encode($insert);
    }
}


public function delete($id){

    $this->Modschool->deletedata($id);
    redirect('admin/category');
}


///edit
public function editcategory($id){
  $data['users']=  $this->Modschool->edit($id);

$this->form_validation->set_rules('name', 'Enter category name', 'required');
 if ($this->form_validation->run()==false) {
     
  $this->load->view('Admin/header');
  $this->load->view('Admin/navtop');
  $this->load->view('Admin/navleft');
  $this->load->view('Admin/edit',$data);
  $this->load->view('Admin/footer');
     }
     else{
        $data=[];
      $data['name']=$this->input->post('name');
      $this->Modschool->update($data,$id);
      redirect('admin/category');
     }
}









///Classs

///view class data

public function class()
{
if($this->session->userdata('id')){
    $data=array();
    $data ['users']=$this->Modschool->viewdata();
    $data ['classes']=$this->Modschool->getclassdata();

    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/class',$data);
    $this->load->view('Admin/footer');
       }
       else {
        $this->session->set_flashdata('error','please fill all fields');
        redirect('admin/login');    
       }
}


///add Class

public function addclass(){
    $this->form_validation->set_rules('class_name','Enter cateory name','required');
    $this->form_validation->set_rules('cat_name','Enter Class name','required');

    if($this->form_validation->run()== true){
        $data['class_name']=$this->input->post('class_name');
        $data['cat_name']=$this->input->post('cat_name');

        $insert=$this->Modschool->insertclass($data);
        echo json_encode($insert);
    }
}


public function delet($id){

    $this->Modschool->deleteclassdata($id);
    redirect('admin/class');
}

///edit class
public function editclass($id){
    $data['userclass']=  $this->Modschool->editclass($id);
    $data ['cats']=$this->Modschool->viewdata();
             
                                   //input name
  $this->form_validation->set_rules('class_name', 'Enter category name', 'required');
  $this->form_validation->set_rules('cat', 'select class name', 'required');

   if ($this->form_validation->run()==false) {
       
    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/editclass',$data);
    $this->load->view('Admin/footer');
       }
       else{
          $data=[];
        $data['class_name']=$this->input->post('class_name');
        $data['cat_name']=$this->input->post('cat');

        $this->Modschool->updateclass($data,$id);
        redirect('admin/class');
       }
  }

/////////////////course///////////
public function cousre()
{
if($this->session->userdata('id')){
    $data=array();
    $data ['courses']=$this->Modschool->getcoursedata();

    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/course',$data);
    $this->load->view('Admin/footer');
       }
       else {
        $this->session->set_flashdata('error','please fill all fields');
        redirect('admin/login');    
       }
}


/////EDIT COURSE
public function editcourse($id){
    $data['editcourse']=  $this->Modschool->editcourse($id);
    $data ['cats']=$this->Modschool->getcoursedata();  
  $this->form_validation->set_rules('course_name', 'Enter category name', 'required');
  $this->form_validation->set_rules('duration', 'Enter category name', 'required');
  $this->form_validation->set_rules('course_fees', 'Enter category name', 'required');
  $this->form_validation->set_rules('course_started', 'Enter category name', 'required');
   if ($this->form_validation->run()==false) {
       
    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/editcourse',$data);
    $this->load->view('Admin/footer');
       }
       else{
          $data=[];
        $data['s_name']=$this->input->post('course_name');
        $data['duration']=$this->input->post('duration');
        $data['course_fees']=$this->input->post('course_fees');
        $data['course_started']=$this->input->post('course_started');
        $this->Modschool->update_course($data,$id);
        redirect('admin/cousre');
       }
  }
// ADD COURSE
/**
 * Summary of addss
 * @return void
 */
// public function asj(){
//     $this->form_validation->set_rules('course_name','Enter Course name','required');
//     $this->form_validation->set_rules('duration','Enter duration time name','required');
//     $this->form_validation->set_rules('course_fees','Enter Course fees name','required');
//     $this->form_validation->set_rules('course_start','Enter course stared name','required');

//     if($this->form_validation->run()== true){
//         $data['course_name']=$this->input->post('course_name');
//         $data['duration']=$this->input->post('duration');
//         $data['course_fees']=$this->input->post('course_fees');
//         $data['course_started']=$this->input->post('course_started');

//         $insert=$this->Modschool->insertcourse($data);
//         echo json_encode($insert);
//     }
// }



public function addcourse(){

    $this->form_validation->set_rules('course_name','Enter Course name','required');
    $this->form_validation->set_rules('duration','Enter duration time name','required');
    $this->form_validation->set_rules('course_fees','Enter Course fees name','required');
    $this->form_validation->set_rules('course_started','Enter course started name','required'); // Corrected input name

    if($this->form_validation->run() == true){

$data = array(
    'coure_name' => $this->input->post('course_name'),
    'duration' => $this->input->post('duration'),
    'course_fees' => $this->input->post('course_fees'),
    'course_started' => $this->input->post('course_started')
);
       

        $insert = $this->Modschool-> insertcourse($data);
        echo json_encode($insert);
    }
}

////delete class

public function deletecourse($id){

    $this->Modschool->deletecoursedata($id);
    redirect('admin/cousre');
}




/////////////////////Students///////////////
public function Student(){
    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/students');
    $this->load->view('Admin/footer');
}


                                                              ////REgister///////////////////////////////


    public function Register(){
        $this->load->view('Admin/header');
        $this->load->view('Admin/navtop');
        $this->load->view('Admin/navleft');
        $this->load->view('Admin/register');
        $this->load->view('Admin/footer');
    }
                    //AddRegister
    // public function addRegister(){
    //     $this->form_validation->set_rules('first_name' ,'First Name','trim|required|alpha');
    //     $this->form_validation->set_rules('user_name' ,'User Name','trim|required|alpha');
    //     $this->form_validation->set_rules('email' ,'Email','trim|required|valid_email|is_unique[StudentLogin.email]');
    //     $this->form_validation->set_rules('password' ,'Password','trim|required');
    //     $this->form_validation->set_rules('Cpassword' ,'Confirm Password','trim|required|matches[pasword]');

    //     if($this->form_validation->run() == true){

    //         $data = array(
    //             'first_name' => $this->input->post('first_name'),
    //             'user_name' => $this->input->post('user_name'),
    //             'email' => $this->input->post('email'),
    //             'password' => $this->input->post('password'),
    //             'confirm_password' => $this->input->post('Cpassword')

    //         );
                   
            
    //                 $insert = $this->Modschool-> insertRegister($data);
    //                 echo json_encode($insert);

    //             }
    //         }

    // public function addRegister() {
    //     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
    //     $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha');
    //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[studentlogin.email]');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required');
    //     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
    
    //     if ($this->form_validation->run() == true) {
    //         $data = array(
    //             'first_name' => $this->input->post('first_name'),
    //             'user_name' => $this->input->post('user_name'),
    //             'email' => $this->input->post('email'),
    //             'password' => $this->input->post('password'),
    //             'confirm_password' => $this->input->post('confirm_password')
    //         );
    
    //         $insert = $this->Modschool->insertRegister($data);
    //         echo json_encode($insert);
    //     } else {
    //         // Handle form validation errors
    //         echo json_encode(['error' => validation_errors()]);
    //     }
    // }
    public function addRegister() {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[studentlogin.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
    
        if ($this->form_validation->run() == true) {
            // Form validation passed, proceed with registration
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'user_name' => $this->input->post('user_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'confirm_password' => $this->input->post('confirm_password')
            );
    
            $insert = $this->Modschool->insertRegister($data);
    
            if ($insert) {
                // Registration successful
                echo json_encode(['success' => true]);
            } else {
                // Registration failed
                echo json_encode(['success' => false, 'message' => 'Error adding user to the database']);
            }
        } else {
            // Form validation failed, send validation errors to the view
            echo json_encode(['success' => false, 'validation_errors' => validation_errors()]);
        }
    }
    








}



