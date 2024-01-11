<?php
class Course extends CI_Controller{

public function index(){
    
    $this->load->view('Admin/header');
    $this->load->view('Admin/navtop');
    $this->load->view('Admin/navleft');
    $this->load->view('Admin/footer');
}





public function arlogin(){

    $this->load->view('AR/arlogin');

}




public  function my_crud(){
    $this->load->view('AR/my_crud');
    
}


}





?>