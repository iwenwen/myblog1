<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_modle extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data =array(
            "user"=>$name,
            "pwd"=>$pwd
        );
        return  $this->db->get_where('t_login',$data)->row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }

    public  function save($name, $email,$content){
        $data =array(
            "name"=>$name,
            "email"=> $email,
          "content"=>$content
    );

        $this->db->insert('t_message',$data);
    }

    public  function update($id,$name,$email,$content){
        $data=array(
            'name'=>$name,
            'email'=>$email,
           'content'=>$content
        );

        $this->db->where('id',$id);
        $this->db->update('t_message',$data,array('id'=>$id));

    }

    public  function delete($admin_id){
        $data=array(
            "id"=>$admin_id
        );
        $this->db->delete('t_admin',$data);
    }
    public function get_by_id($add_id){
        $data=array('id'=>$add_id);
        return $this->db->get_where('t_message',$data)->row();
    }

}



















