<?php

class IndexController extends Abstract_Controller
{
	public function run()
	{
		//Create the view object
		$v = new View();
		$v->setTemplate(TPL_DIR . '/index.tpl.php';

		//set the model and view object
		$this->setModel(new IndexModel());
		$this->setView($v);

		$this->model->attach($this->view);

		//get data 
		$data = $this->model->getAll();

		//send updated data
		$this->model->updateData($data);
		
		//contact the observers
		$this->model->notify();

	}
}