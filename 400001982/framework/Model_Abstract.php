<?php
abstract class Model_Abstract{
	protected $json = [];

	abstract public function getAll():array;

	abstract public function getRecord(string $id): array;
	
	public function loadData(string $filename): array;
	{
		//Gets file name from passed variable
		$file = basename($filename, '.json');

		//Checks if file is already stored 
		if(!isset($this->json[$file]) || empty($this->json[$file])){

			//Gets data from file and stores it if not already done
			$json_file = file_get_contents($filename)
			$this->json[$file] = json_decode($json_file,true);
		}
		
		return $this->json[$file];
	}
}