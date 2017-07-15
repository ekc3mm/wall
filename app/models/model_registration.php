<?php 
class Model_registration extends Model
{
    public $header = "Регистрация";
	public function get_data(){
        if(isset($_SESSION[id])){
            header("Location: /wall");
        }
    $data = $_POST;
    if( isset($data['do_signup'])){
        $errors = array();
        if($data[login] =='') $errors[] = 'введите логин';
        if($data[name] =='') $errors[] = 'введите имя';
        if($data[sername] =='') $errors[] = 'введите фамилию';
        if($data[email] =='') $errors[] = 'введите email';
        if($data[password] =='') $errors[] = 'введите пароль';
        if($data[password] !=$data[password2]) $errors[] = 'пароли не совпадают';
        if(R::count('users',"login = ?", array($data[login])) > 0){
            $errors[] = 'Пользователь с таким логином уже существует!';
        }
        if(R::count('users',"email = ?", array($data[email])) > 0){
            $errors[] = 'Пользователь с таким email уже существует!';
        }
        if(empty($errors)){
            

            $user = R::dispense(users);
            $user->login = $data[login];
            $user->name = $data[name];
            $user->sername = $data[sername];
            $user->email = $data[email];
            $user->about = $data[about];
            $user->password = password_hash($data[password],PASSWORD_DEFAULT);
            if(isset($_FILES)){
                $ext = array_pop(explode('.',$_FILES['file']['name']));
                
                $user->img = '.'  . $ext;
            }
            $id = R::store($user);

             if(isset($_FILES)){
                move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $id . '.'  . $ext);
             }        

            $errors[] = 'Вы успешно зарегестрированы';
        }
    
    }
    
        $data[errors] = $errors;
        $data[header] = "Регистрация";
        return $data;
   }
}