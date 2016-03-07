<?php
	function fileext($filename){
		return substr(strrchr($filename, '.'),1);
	}
	function random($length){
		$hash = 'CR-';
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcefghijklmnopqrstuvwxyz';
		$max = strlen($chars) - 1;
		mt_srand((double)microtime()*1000000);
		for($i = 0; $i < $length; $i++){
			$hash .=$chars[mt_rand(0, $max)];
		}
		return $hash;
		
	}
	?>