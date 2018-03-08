	</div>
</div>
	<div class="content">
	<!--  id 	name 		level 	hp 		strength 	dexterity 	wisdom 	atack 	defense 	luck
		   1 	Geronimo 	15 		110 	13 			5 			7 		23 		12 			1 	-->

<?= form_open('heroes/create');?>
	<legend for="name">Hero name</legend>
	<input type="text" id="name" name="name" placeholder="" 
	value="<?php echo set_value('name');?>">
	<legend for="level">Level</legend>
	<input type="number" name="level" id="level" min="1" max="99999" value="<?php 
	echo set_value('level'); ?>"><br><!-- to make set_value work! form_validation
	needs to run validation tests on that field, if not required just set an empty rule-->
	<legend for="hp">hp</legend>
	<input type="number"  id="hp" name="hp" value="<?=set_value('hp');?>" min="0" max="100000000">

	<legend for="">strength</legend>
	<input type="number"  id="strength" name="strength" value="<?=set_value('strength');?>">

	<legend for="dexterity">dexterity</legend>
	<input type="number"  id="dexterity" name="dexterity" value="<?=set_value('dexterity');?>">	

	<legend for="wisdom">wisdom</legend>
	<input type="number"  id="wisdom" name="wisdom" value="<?=set_value('wisdom');?>">


	<legend for="atack">atack</legend>
	<input type="number"  id="atack" name="atack" value="<?=set_value('atack');?>" min="0" max="100000000">

	<legend for="defense">defense</legend>
	<input type="number"  id="defense" name="defense" value="<?=set_value('defense');?>" min="0" max="100000000">

	<legend for="luck">luck</legend>
	<input type="number"  id="luck" name="luck" value="<?=set_value('luck');?>" min="0" max="255">

<br>
	<input type="submit" value="Add hero">
</form>
<?php echo validation_errors('<span class="error">', '</span>'); ?><br>
<?=anchor('heroes', 'back to list of heroes'); ?>
</div>