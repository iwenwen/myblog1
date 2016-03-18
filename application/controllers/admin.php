<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function admin_mrg()
	{
		$this->load->view('admin_mrg');
	}
	public function message(){
		$this->load->model('admin_modle');
		$result=$this->admin_modle->get_all();
		$data=array("messages"=>$result);
		$this->load->view('admin/admin_message',$data);
	}
	public function blog(){
		$this->load->model('admin_modle');
		$result=$this->admin_modle->get_all_blog();
		$data=array('blogs'=>$result);
		$this->load->view('admin/admin_blog',$data);
	}
	public function delete(){
		$adminID=$this->input->get('id');
		$this->load->model('admin_modle');
		$this->admin_modle->delete($adminID);
		$this->message();
	}
	public function delete_blog(){
		$adminID=$this->input->get('id');
		$this->load->model('admin_modle');
		$this->admin_modle->delete_blog($adminID);
		$this->blog();
	}
public function update_comment(){
	$id=$this->input->post('id');
	$name=$this->input->post('name');
	$email=$this->input->post('email');
	$website=$this->input->post('website');
	$subject=$this->input->post('subject');
	$this->load->model('comment_model');
	$this->comment_model->update($id,$name,$email,$website,$subject);
	$this->blog();
}
public function update_message(){
	$id=$this->input->post('id');
	$name=$this->input->post('name');
	$email=$this->input->post('email');
	$content=$this->input->post('content');
	$this->load->model('message_modle');
	$this->message_modle->update($id,$name,$email,$content);
	$this->message();
}
	public function delete_all(){
		$this->load->model('admin_modle');
		$this->admin_modle->delete_all();
		$this->message();
	}
	public function delete_all_blog(){
		$this->load->model('admin_modle');
		$this->admin_modle->delete_all_blog();
		$this->blog();
	}
	public function change(){
		$add_id=$this->input->get('id');
		$this->load->model('blog_model');
		$row=$this->blog_model->get_by_id($add_id);
		if($row){
			$data=array("admins"=>$row);
			$this->load->view('change_page',$data);

		}
	}
	public function change_message(){
		$add_id=$this->input->get('id');
		$this->load->model('message_modle');
		$row=$this->message_modle->get_by_id($add_id);
		if($row){
			$data=array("admins"=>$row);
			$this->load->view('message_change_page',$data);

		}
	}
	public function save_add_message(){
		$name=$this->input->get('name');
		$email=$this->input->get('email');
		$content=$this->input->get('content');
		$this->load->model('message_modle');
		$this->message_modle->save($name,$email,$content);
		$this->message();
	}
	public function save_add_blog(){
		$name=$this->input->get('NAME');
		$email=$this->input->get('email');
		$website=$this->input->get('website');
		$content=$this->input->get('subject');
		$this->load->model('comment_model');
		$this->comment_model->save($name,$email,$website,$content);
		$this->blog();
	}
	
	
}

