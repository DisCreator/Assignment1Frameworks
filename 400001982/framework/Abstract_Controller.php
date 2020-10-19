<?php
/**
 * 
 */
abstract class Abstract_Controller 
{
	/*
	The view object that the controller will call  on to
	display data on the registered HTML page
	*/
	protected $view = null;

	/*
	The model object that the controller will call  on to
	manipulate
	*/
	protected $model = null;

	/*
	The abstract method that has to be implemented
	in order to create the model for the controller
	*/
	protected function setModel(){
		$this->model = $model;
	}
	
	/*
	The abstract method that has to be implemented for
	each controller in order for it to have a view
	*/
	protected function setView(){
		$this->view = $view;
	}
	/*
	The method used to execute the controller
	*/
	abstract public function run();

}

?>