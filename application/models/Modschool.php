<?php

class Modschool extends CI_Model
{


    public function logadmin($data)
    {
        return $this->db->get_where('adminschool',$data)->result_array();
    }

    public function viewdata(){
        return $this->db->get('cate')->result_array();
    }


    public function insertcategory($data){
$this->db->insert('cate',$data);
    }



    public function deletedata($id){
        $this->db->where('id',$id);
        $this->db->delete('cate');  
    }


    ////edit category


    public function edit($id){
        $this->db->where('id',$id);

     return   $this->db->get('cate')->row_array();
    }



    //update
    public function update($data,$id){
        $this->db->where('id',$id);
     return   $this->db->update('cate',$data);
    }



///////////////////////////classss/////////////////

public function insertclass($data){
 $this->db->insert('class',$data);
        }


        public function getclassdata(){
            return $this->db->get('class')->result_array();
        }
        public function deleteclassdata($id){
            $this->db->where('id',$id);
            $this->db->delete('class');  
        }

////EDit  class///
public function editclass($id){
    $this->db->where('id',$id);

 return   $this->db->get('class')->row_array();
}

    //update classs
    public function updateclass($data,$id){
        $this->db->where('id',$id);
     return   $this->db->update('class',$data);
    }





/////get  data in course////////////

public function getcoursedata(){
    return $this->db->get('course')->result_array();
}

/// insert course
// public function insertcourse($data){
//     $this->db->insert('course',$data);
//         }

public function insertcourse($data) {
    return $this->db->insert('course', $data);
}

////
 public function deletecoursedata($id){
    $this->db->where('id',$id);
    $this->db->delete('course');  
}


public function editcourse($id){
    $this->db->where('id',$id);

 return   $this->db->get('course')->row_array();
}

    //update classs
    public function update_course($data,$id){
        $this->db->where('id',$id);
     return   $this->db->update('course',$data);
    }

//////////////REGISTER///////////


public function insertRegister($data){
    $this->db->insert('studentlogin',$data);
           }
        }