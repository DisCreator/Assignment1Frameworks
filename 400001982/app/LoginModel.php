<?php
 class LoginModel extends Observable_Model{
 	public function getAll(): array{
 		$jsonstring = file_get_contents(DATA_DIR. '/users.json');
 		$json = json_decode($jsonstring, true);
 		return $json['users'];

 	}
 	public function getRecord(string $id): array{
 		$jsonstring = file_get_contents(DATA_DIR. '/users.json');
 		$json = json_decode($jsonstring, true);
 		return $json['users'][$id];
 	}
 }

