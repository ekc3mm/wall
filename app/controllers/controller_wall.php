<?php 

class Controller_Wall extends Controller
{

	function __construct(){
		$this->model = new Model_wall();
		$this->view = new View();

	}
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('wall_view.php','template_view.php',$data);
	}

	function action_user()
	{
		$data = $this->model->user();
		$this->view->generate('users_view.php','template_view.php',$data);
	}

	function action_edit(){
		$data = $this->model->edit();
		$this->view->generate('edit_view.php','template_view.php',$data);
	}


}
 ?>