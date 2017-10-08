<?php
	class Code_generator {
		public function get_product_code() {
			$alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	        $pass = array(); 
	        $alphaLength = strlen($alphabet) - 1;
	        for ($i = 0; $i < 4; $i++) {
	            $n = rand(0, $alphaLength);
	            $pass[] = $alphabet[$n];
	        }

	        $date = date('YmdHis');

	        return implode($pass).$date;
		}
	}
?>