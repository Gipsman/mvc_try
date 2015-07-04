<?php

class Model_Users extends Model
{
    public function checkLoginAndPassword()
    {	
            $login = $this->checkUserData($_POST['username']);
            $password = md5($this->checkUserData($_POST['password']));
            $conn = $this->ConnectDB();
            if($conn->connect_error) 
                    return "Ошибка подключения базы данных";
            else
                    $result = $conn->query("SELECT * FROM users WHERE login='$login' AND password='$password'");
            if ($result->num_rows > 0){
                    $_SESSION['login_admin'] = 'admin';
                    return false;
            }
            return "Неверный логин и/или пароль";

    }

    public function check_login()
    {
            if(isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == 'admin' )
                    {return true;}
            else{
                     if(isset($_POST['username']) && isset($_POST['password'])){
                            if($_POST['username'] =='' || $_POST['password'] == '')
                                    {
                                     return false;
                                    }
                            $this->checkLoginAndPassword();
                            if(!$result)
                                    return true;
                            else
                                    {
                                    return false;
                                    }
                            }
                  return false;
              }
    }

}
