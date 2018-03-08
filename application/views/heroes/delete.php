	</div>
</div>
	<div class="content">

<p>Which hero would you like to delete?</p>
<?=form_open('heroes/delete');?>
<input type="text" name="delname" id="delname" value="<?=set_value('name');?>"><br><br>
<input type="submit" value="Delete hero"><br>
</form>

<?php echo validation_errors('<span class="error">', '</span>');?><br>
<?=anchor('heroes', 'back to Heroes list');?>

</div>