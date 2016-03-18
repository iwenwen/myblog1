<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data =array(
            "user"=>$name,
            "pwd"=>$pwd
        );
        return  $this->db->get_where('t_login',$data)->row();
    }
    public function get_by_id($add_id){
        $data=array('id'=>$add_id);
        return $this->db->get_where('t_comment',$data)->row();
    }
    public function get_all(){
        return $this -> db -> get('t_blog') -> result();
    }

   public function show_blog($id){
       $data=array("id"=>$id);
       return $this->db->get_where('t_blog',$data)->row();
   }

}
