<h1><?php echo $title;?></h1>
<?=validation_errors(); ?>
<?php echo form_open('secret/create'); ?>
	<legend for="secret_text">Secret title</legend>
	<input type="text" id="secret_title" name="secret_title">

	<legend for="secret_text">what's your secret?</legend>
	<input type="text" id="secret_text" name="secret_text">
	<input type="submit" value="Save secret">
</form>