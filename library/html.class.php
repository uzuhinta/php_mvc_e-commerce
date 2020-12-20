<?php

class HTML
{
	private $js = array();

	function shortenUrls($data)
	{
		$data = preg_replace_callback('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', array(get_class($this), '_fetchTinyUrl'), $data);
		return $data;
	}

	private function _fetchTinyUrl($url)
	{
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, 'http://tinyurl.com/api-create.php?url=' . $url[0]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return '<a href="' . $data . '" target = "_blank" >' . $data . '</a>';
	}

	function sanitize($data)
	{
		return mysqli_real_escape_string($data);
	}

	function link($text, $path, $prompt = null, $confirmMessage = "Are you sure?")
	{
		$path = str_replace(' ', '-', $path);
		if ($prompt) {
			$data = '<a href="javascript:void(0);" onclick="javascript:jumpTo(\'' . BASE_PATH . '/' . $path . '\',\'' . $confirmMessage . '\')">' . $text . '</a>';
		} else {
			$data = '<a href="' . BASE_PATH . '/' . $path . '">' . $text . '</a>';
		}
		return $data;
	}

	function linkSrc($model, $action, $param = null, $order = null)
	{
		//	    $data = '"' .BASE_PATH . '/' . $model . '/' . $action . '.php' . '"';
        if($order != null){
            return $data = '"' . BASE_PATH . '/' . $model . '/' . $action . '/' . $param . '/' . $order . '"';
        }
		if ($param) {
            $data = '"' . BASE_PATH . '/' . $model . '/' . $action . '/' . $param . '"';
		} else {
			$data = '"' . BASE_PATH . '/' . $model . '/' . $action  . '"';
		}
		return $data;
	}

	function includeJs($fileName)
	{
		$data = '<script src="' . BASE_PATH . '/js/' . $fileName . '.js' . '"> </script>';
		return $data;
	}

	function includeCss($fileName)
	{
		$data = '<link rel="stylesheet" href="' . BASE_PATH . '/css/' . $fileName . '.css' . '"> </link>';
		return $data;
	}

	function includeImg($fileName, $end = null)
	{
		//        src="img/LogoPingPong.png"
		if ($end) {
			$data = 'src="' . BASE_PATH . '/img/' . $fileName . '.' . $end . '"';
		} else {
			$data = 'src="' . BASE_PATH . '/img/' . $fileName . '.png' . '"';
		}
		return $data;
	}
}
