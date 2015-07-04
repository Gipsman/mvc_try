<?php

class Model_News extends Model
{

	public function getNews(){
		$conn = $this->ConnectDB();
		$data = array();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM news");

		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$data[]= $row;
			}
			return $data;
		}
		return false;
	}

	public function getArticleById($id){
		$id = $this->checkUserData($id);
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM news WHERE id='$id'");

		if ($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return false;
	}

	public function getArticleBySlug($slug){
		$slug = $this->checkUserData($slug);
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return false;
		else
			$result = $conn->query("SELECT * FROM news WHERE slug='$slug' LIMIT 1");

		if ($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return false;
	}
   	public function saveNews(){
		$conn = $this->ConnectDB();
		if($conn->connect_error) 
			return false;
		else{
			if(isset($_POST['news_id'])){
			$id = $this->checkUserData($_POST['news_id']);	
			$slug = $this->checkUserData($_POST['slug']);	
			$title = $this->checkUserData($_POST['title']);	
			$content = $this->checkUserData($_POST['content']);	
			$conn->query("UPDATE news SET slug='$slug',
										 title='$title',
									   content='$content'
						  WHERE id='$id'");
			} else {
			$slug = $this->checkUserData($_POST['slug']);	
			$title = $this->checkUserData($_POST['title']);	
			$content = $this->checkUserData($_POST['content']);	
			$conn->query("INSERT INTO news SET slug='$slug',
										      title='$title',
										    content='$content'");
			}
		}

   	}

    public function getNewsByTag(){}
   	public function addArticle(){} 

}
