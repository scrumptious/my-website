	</div>
</div>
	<div class="content_view">
	<p>Feel free to manage heroes that are stored in a database. All available heroes are displayed below.</p>
	<table class="heroes_table">
		<tr>
			<th>name</th>
			<th>level</th>
			<th>health</th>
			<th>strength</th>
			<th>dexterity</th>
			<th>wisdom</th>
			<th>atack</th>
			<th>defense</th>
			<th>luck</th>
		</tr>
	<!--  id 	name 		level 	hp 		strength 	dexterity 	wisdom 	atack 	defense 	luck
		   1 	Geronimo 	15 		110 	13 			5 			7 		23 		12 			1 	-->
		<?php foreach($all_heroes as $hero): 
		// <td><a href="heroes/view/'.$hero['name'].'">'.$hero['name'].'</a></td>
		echo '
		<tr>
			<td><strong>'.$hero['name'].'</strong></td>
			<td>'.$hero['level'].'</td>
			<td>'.$hero['hp'].'</td>
			<td>'.$hero['strength'].'</td>
			<td>'.$hero['dexterity'].'</td>
			<td>'.$hero['wisdom'].'</td>
			<td>'.$hero['atack'].'</td>
			<td>'.$hero['defense'].'</td>
			<td>'.$hero['luck'].'</td>

		</tr>';
		endforeach; ?>
	</table><br>
	<a style="padding-right: 60px" href="<?php echo site_url('heroes/create');?>">Create your own hero!</a>
	<?=anchor('heroes/delete', 'Delete hero');?>
</div>




