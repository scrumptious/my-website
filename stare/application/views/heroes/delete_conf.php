	</div>
</div>
<div class="content">
	<h2>Deleting <b><i><?=$hr;?></i></b></h2>
	<p>Do you really want to delete <span class="error"><strong><?php echo $hr;?></strong></span>?</p>
	<?=form_open('heroes/delete_conf');?>
		<input type="submit" name="delyes" id="delyes" value="Yes">
		<input type="submit" name="delno" id="delno" value="No">
		<input type="text" id="heroname" name="heroname" value="<?=$hr;?>" hidden="hidden">
	</form>
</div>