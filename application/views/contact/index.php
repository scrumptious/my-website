			<div class="col col-md-6 col-md-offset-3">
				<?=form_open(base_url().'contact');?>
				<fieldset>
					<legend for="name">Name</legend>
					<input type="text" id="name" name="name" value="<?=set_value('name');?>">
					<legend for="email">E-mail</legend>
					<input type="email" id="email" name="email" value="<?=set_value('email');?>">
					<legend for="enquiry">How I can help</legend>
					<textarea name="enquiry" id="enquiry" cols="50" rows="10" value="<?=set_value('enquiry');?>"></textarea><br>
					<input type="submit" value="Send" id="sent" name="sent"><br>
					<?=validation_errors('<span class="error">', '</span>');?>
				</fieldset>
				</form>
			</div>
		</div>
	</div>
