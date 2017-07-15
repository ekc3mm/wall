<?php 

class Controller_registration extends Controller
{
	function __construct(){
		$this->model = new Model_registration();
		$this->view = new View();
	}
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('registration_view.php','template_view.php',$data);
	}

}
 ?>