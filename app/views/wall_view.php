<div class="row">
		
	<?php 
		foreach ($data[users] as $user):?>
			<div class="col-md-6 mb30">

				<a class="btn  profile-name" href="/wall/<?=$user[id]?>">
					<h4>
						<?php echo "$user[name] $user[sername]"; ?>
					</h4>
				</a>
				<div class="zoom">
					<?php 
						if ( $user[img] == '.') {
							$img =  'no.jpg';
						} else {
							$img = $user[id] . $user[img];
						}
						?>
						<img class="img-responsive  profile" src= "img/<?=$img?>">

				</div>	
			</div>
		<?php  endforeach; ?>
</div>