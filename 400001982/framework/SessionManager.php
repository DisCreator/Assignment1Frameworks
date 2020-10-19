<?php
class SessionManager{
	public static function create(){
		session_start();
	}
	public function destroy(){
		session_destroy();
	}
	public function add($name, $value){
		$_SESSION[$name] = $value;
	}
	public function remove($name){
		unset($_SESSION[$name]);
	}
}
?>