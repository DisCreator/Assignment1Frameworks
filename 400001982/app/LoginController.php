<?php
class LoginController extends Abstract_Controller{
	protected $errors = [];

	protected function setModel(){
		$login = new LoginModel();
		$this->model = $login;
	}

	protected function setView(): View{
		$view = new View();
		$view->setTemplate(TPL_DIR . '/login.tpl.php');
		return $view;
	}

	public function run(){
		if(!empty($_POST)){
			$this->setModel();
			$users = $this->model->getAll();
			if( in_array( $_POST['email'],array_column($users, 'email') ) && in_array( $_POST['pass'],array_column($users, 'password') )){
				header('Location: index.php'); 
			}else{
				echo "not in array";
			}
		}
		$this->view = $this->setView();
		$this->view->display();
				
	}
	
}

/*array(1) { 
	[1]=> array(4) { 
		["id"]=> int(1) 
		["name"]=> string(9) "Test User" 
		["email"]=> string(19) "tester@comp3170.com" 
		["password"]=> string(12) "Testpassw0rd" } }*/