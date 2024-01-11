<?php
class Demo
{
function  abcd(){
    echo "work from libaray";
}


function  xyz(){
    echo " whats your goood name";
}


public function showme(){
    $ci=&get_instance();
    $ci->load->helper('array');
    
	     $arr= ['abc'=>'ABC','hussain' => 'HUssain'];
		 echo element('abc',$arr ,'NOT FOUND') ."</br>"; 
    echo "the provide beautifl name your name" ;
}

}



?>