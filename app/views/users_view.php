<div class="row">
	<div class="col-md-6">
		<div class="zoom">
			<img class="img-responsive  profile" src= "/img/<?php echo $data[id] . $data[img]?>">
		</div>		
	</div>
	<div class="col-md-6">

		<p>Имя: <?=$data[name] ?></p>
		<p>Фамилия: <?=$data[sername] ?></p>
		<p>Почта: <?=$data[email] ?></p>
		<p>О себе: <?=$data[about] ?></p>
		
		<?php
		if ($data[edit]): ?>
		<a class="btn btn-primary" href="/wall/edit">Изменить информацию</a>	
		<?php endif ?>
	</div>
</div>