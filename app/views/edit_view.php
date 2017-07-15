<div class="col-md-4 col-md-offset-4">
<form method="post"  enctype="multipart/form-data">

		<label>
			<p>Ваше имя:</p>
			<p><input type="text" name="name" <?php if(isset($data[name])) echo "value = $data[name]"; ?>></p>
		</label>
		<label>
			<p>Ваша фамилия:</p>
			<p><input type="text" name="sername" <?php if(isset($data[sername])) echo "value = $data[sername]"; ?>></p>
		</label>
		<label>
			<p>Ваш email:</p>
			<p><input type="email" name="email" <?php if(isset($data[email])) echo "value = $data[email]"; ?>></p>
		</label>
		<label>
			<p>О себе(не обязательно):</p>
			<p><textarea name="about"><?php if(isset($data[about])) echo "$data[about]"; ?></textarea></p>
		</label>
		<label>
			<p>Изменить фото:</p>
			<p><input type="file" name="file"></p>
		</label>
		<p><button class="bnt btn-primary" type="submit" name="change">Сохранить</button></p>
	</form>
	</div>