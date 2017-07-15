<?php 
class Model_login extends Model
{
    public $header = "Авторизация";
	public function get_data(){


        if(isset($_SESSION[id])){
            header("Location: /wall");
        }
        
    $data = $_POST;
    if(isset($data[do_login]))
    {
        $errors = array();
        $user = R::findOne('users' , 'login = ?' , array($data['login']));
        if($user)
        {
            if(password_verify($data['password'],$user->password)){
                    $_SESSION ['login'] = $user->login;
                    $_SESSION ['id'] = $user->id;
                    
                    header('Location: /');
            }else{
                $errors[] = 'Неверно введен пароль';
            }
        } else{
            $errors[] = 'Пользователь не найден';
        }
        if(! empty($errors)){
            
        }
    }
        
  
        $data[header] = "Авторизация";
        $data[errors] = $errors;
        return $data;
   }
}