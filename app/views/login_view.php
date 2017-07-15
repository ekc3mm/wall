

<div class="col-md-4 col-md-offset-4">
<?php echo $data[errors][0] ?>
<form method="post">
	<div class="form-group">
		<label>
			<p>Ваш логин:</p>
			<p><input type="text" name="login"></p>
		</label>
	</div>
	<div class="form-group">
		<label>			
			<p>Ваш пароль:</p>
			<p><input type="password" name="password"></p>
		</label>
	</div>
	
	<p><button class="btn btn-primary" type="submit" name="do_login">Вход</button></p>
	</form>
	</div>


