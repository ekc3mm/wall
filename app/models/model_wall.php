<?php 
class Model_wall extends Model
{

	public function get_data()
	{
	
		$data[users] = R::find('users');
		$data[header] = "Стена";
		return $data;
	}


	public function user()
	{
		$user = explode('/', $_SERVER['REQUEST_URI']);
		if ( !empty($user[2]) ){
			$user = $user[2];
		}

		$data = R::findOne('users','id = ?' , [ $user ]);

		if($user == $_SESSION[id]){
			$data[edit] = true;
		}

		$data[header] = "Стена";
		return $data;
	}

	public function edit(){
		if(!isset($_SESSION[id])){
			header("Location: /wall");
		}
		$data = $_POST;
    	if( isset($data['change'])){
    		$user = R::load( 'users', $_SESSION[id]);
    		
    		if($data[name] != '')
    		{
    			$user->name = $data[name];
    		}
    		if($data[sername] != '')
    		{
    			$user->sername = $data[sername];
    		}
    		if($data[email] != '')
    		{
    			$user->email = $data[email];
    		}
    		if($data[about] != '')
    		{
    			$user->about = $data[about];
    		}
    		
    		

    		if($_FILES['file']['name'] != ''){
    			$ext = array_pop(explode('.',$_FILES['file']['name']));
    			$user->img = '.'  . $ext;
                move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $_SESSION[id] . '.'  . $ext);
             }
             R::store($user);
             header("Location: /wall/$_SESSION[id] ");

    	}
		$user = R::findOne('users','id = ?' , [ $_SESSION[id] ]);
		return $user;
	}


}
 ?>
