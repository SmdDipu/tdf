<?php 

	class session{

		public function __construct(){
			session_start();
		}

		public function nur()
		{
			echo "session";
		}

		public static function setter($key,$value)
		{
			$_SESSION["$key"] = $value;

			return true;
		}

		public static function getter($key){
			if(isset($_SESSION["$key"])){
				return $_SESSION["$key"];
			}else{
				return false;
			}
		}

		public static function unseter($key)
		{
			unset($_SESSION["$key"]);
		}

		public static function destroy()
		{
			session_destroy();
		}

	}