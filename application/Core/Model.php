<?php

class Model
{
	
  public function get_data()
	{
		// todo
	}

  public function ConnectDB()
	{
    $result = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);  // настройки Базы данных
	if ($mysqli->connect_error) {
    	echo 'Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
    	return false;
	}
    else{
    	$result->set_charset("utf8");
      	return $result;
    }
	}

  public function checkUserData($data) {
	$input_text = strip_tags($data);
	$input_text = htmlspecialchars($input_text);
	$input_text = mysql_escape_string($input_text);
	$input_text = addslashes($input_text);
	return $input_text;
	}

}