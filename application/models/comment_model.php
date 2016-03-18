<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

    public  function save($name,$email,$website,$subject){
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'website'=>$website,
            'subject'=>$subject
        );
        $this->db->insert('t_comment',$data);
    }

    public  function update($id,$name,$email,$website,$subject){
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'website'=>$website,
            'subject'=>$subject
        );

        $this->db->where('id',$id);
        $this->db->update('t_comment',$data,array('id'=>$id));

    }

}
