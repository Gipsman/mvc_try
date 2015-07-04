<?php

class Model_Pages extends Model
{
	
	public function getPage($slug)
	{	
		$slug = $this->checkUserData($slug);
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return Null;
		else
			$result = $conn->query("SELECT * FROM static_pages WHERE slug='$slug'");

		if ($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return Null;
	}

}
