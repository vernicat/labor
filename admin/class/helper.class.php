<?
	header("Content-type:text/html;charset=utf-8");

	class Helper {
		static function textCase($n,$texts){
			$cases=array(2,0,1,1,1,2);
			return $texts[($n%100>4&&$n%100<20)?2:$cases[($n%10<5)?$n%10:5]];
		}
		static function generateCode($length) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
			$code = "";
			$clen = strlen($chars) - 1;  
			while (strlen($code) < $length)
				$code .= $chars[mt_rand(0,$clen)];  
			return $code;
		}
		static function echoResponse($q) {
			$a = ["response"=>$q];
			return json_encode($a, JSON_UNESCAPED_UNICODE);
		}
		static function dump($v) {
			echo "<pre>";
			print_r($v);
			echo "</pre>";
		}
		static function s($s,$q) {
			if(strlen($s) < $q)
				return $s;
			$q = $q ?? 500; // если не указана нужная длина текста
			$s = substr($s, 0, $q);
			$s = rtrim($s, "!,.-");
			$s = substr($s, 0, strrpos($s, ' '));
			return $s." […] ";
		}
		static function deleteHtml($s) : string {
			return trim(htmlspecialchars(strip_tags($s)));
		}
	}
?>
