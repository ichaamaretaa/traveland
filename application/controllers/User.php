<?php 
class User extends CI_Controller{
	function __construct()
	{
		parent ::__construct();

		$this->load->model("user_m");
	}
	public function index()
	{
		$data = $this->user_m->GetData();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function add_data()
	{
		$this->load->view('form_v');
	}
	public function do_insert()
	{
		$id_user = $_POST['id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$level = $_POST['level'];
		$data_insert = array(
		'id_user' => $id_user,
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'level' => $level
		);
		$res = $this->user_m->InsertData('user',$data_insert);
		if($res>=1){
			redirect('user/index');
		}else{
			echo "<h2>Insert data gagal </h2>";
		}
	}
	public function do_delete($id_user){
		$where = array('id_user' => $id_user);
		$res = $this->user_m->DeleteData('user',$where);
		if($res >= 1){
			redirect('user/index');
		}
	}
}
