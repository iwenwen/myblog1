<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function myindex(){
		$this->load->view('index');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function login(){
		$this->load->view('login');
	}
	public function check_login(){
		$name=$this->input->post('uname');
		$pwd=$this->input->post('pwd');
		$this->load->model('admin_modle');
		$row=$this->admin_modle->get_by_name_pwd($name,$pwd);
		if($row){
			$this->load->view('index');
		}
		else{
			$this->load->view('login');
		}
	}
	public function search(){
		$this->load->view('search');
	}
	public  function get(){
		$this->load->model('admin_modle');
		$result=$this->admin_modle->get_all();
		if($result){
			$data=array("admins"=>$result);
		}
		$this->load->view('show',$data);

	}

	public function save(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$content=$this->input->post('content');
		if($name==""||$email==""||$content==""){
			echo "<script>alert('请输入规定格式的内容哦~');</script>";
			$this->load->view('contact');
		}
		else{
			$this->load->model('message_modle');
			$this->message_modle->save($name,$email,$content);
			$this->load->view('index');
			
		}

	}
	public function single(){

		$this->load->view('single');
	}
	 public function word(){
	 	$id=$this->input->get('id');
		$data=array('index'=>$id);
//		 $this->load->model("blog_model");
//		 $data=$this->blog_model->show_blog($id);

	 	$this->load->view('single',$data);
	 }
	public function save_commont(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$website=$this->input->post('website');
		$subject=$this->input->post('subject');
		if($name==""||$email==""||$website==""||$subject==""){
			echo "<script>alert('请输入规定格式的内容哦~');</script>";
			$this->load->view('single');
		}
		else{
			$this->load->model('comment_model');
			$this->comment_model->save($name,$email,$website,$subject);
			$this->load->view('index');

		}

	}
	// public function get_blog(){
	// 	$this->load->model('blog_model');
	// 	$result=$this->blog_model->get_all();
	// 	if($result){
	// 		$data=array('blogs'=>$result);
	// 	}
	// 	$this->load->view('blog',$data);
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */