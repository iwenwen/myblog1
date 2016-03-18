<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_modle extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
            $data =array(
                "user"=>$name,
                "pwd"=>$pwd
            );
      return  $this->db->get_where('t_login',$data)->row();
    }

    public function get_all(){
        return $this -> db -> get('t_message') -> result();
    }
    public function get_all_blog(){
        return $this -> db -> get('t_comment') -> result();
    }

    public  function delete($adminID){
        $data=array('id'=>$adminID);
        $this->db->delete('t_message',$data);
    }
    public function delete_blog($adminID){
        $data=array('id'=>$adminID);
        $this->db->delete('t_comment',$data);
    }
    public function delete_all(){
        $this->db->empty_table('t_message');
    }
     public function delete_all_blog(){
        $this->db->empty_table('t_comment');
    }

}



















