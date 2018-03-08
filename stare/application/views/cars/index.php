<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="<?=assets_url();?>css/basic.css">
	<script src="<?=assets_url();?>js/ajax.js"></script>
	<script src="<?=assets_url();?>js/QueryData.js"></script>

</head>
<body>
	<div id="demo"></div>
	<form method="GET" action="">
<!-- 		<input type="radio" name="sent" value="n" hidden="hidden"> -->
		<fieldset>
			<legend></legend>
			<h2>Set one or more search criteria</h2>
			first owner <input type="checkbox" name="firstOwner" 
			<?php if(isset($_GET['firstOwner'])) echo 'checked="checked"';?> ><br>
			<fieldset>
				fuel type <br>
				any <input type="radio" name="fuelType" value="any" <?php if(isset($_GET['fuelType']) && $_GET['fuelType'] == 'any') echo 'checked="checked"';?> > 
				diesel <input type="radio" value="diesel" name="fuelType" <?php if(isset($_GET['fuelType']) && $_GET['fuelType'] == 'diesel') echo 'checked="checked"';?> >
				petrol <input type="radio" value="petrol" name="fuelType" <?php if(isset($_GET['fuelType']) && $_GET['fuelType'] == 'petrol') echo 'checked="checked"';?> ><br>
			</fieldset>
			<fieldset>
				price range
					<input type="number" min="0" name="priceMin" value="<?php if(isset($_GET['priceMin'])) echo $_GET['priceMin'];?>" >
					<input type="number" min="0" name="priceMax" value="<?php if(isset($_GET['priceMax'])) echo $_GET['priceMax'];?>"><br>
			</fieldset>
			engine size <select name="engineSize" id="engineSize">
	            <option value="all" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == 'all') echo 'selected="selected"';?>>All</option>
	            <option value="0" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '0') echo 'selected="selected"';?>>Less than 1L</option>
	            <option value="1" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '1') echo 'selected="selected"';?>>1L - 1.3L</option>
	            <option value="2" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '2') echo 'selected="selected"';?>>1.4L - 1.6L</option>
	            <option value="3" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '3') echo 'selected="selected"';?>>1.7L - 1.9L</option>
	            <option value="4" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '4') echo 'selected="selected"';?>>2L - 2.9L</option>
	            <option value="5" <?php if(isset($_GET['engineSize']) && $_GET['engineSize'] == '5') echo 'selected="selected"';?>>3L and Over</option>
			</select><br>
			<fieldset>
				transmission <br>
				any	<input type="radio" name="transmission" value="any" 
					<?php if(isset($_GET['transmission']) && $_GET['transmission'] == 'any') echo 'checked="checked"';?> >
				manual <input type="radio" name="transmission" value="manual" 
					<?php if(isset($_GET['transmission']) && $_GET['transmission'] == 'manual') echo 'checked="checked"';?> > 
				automatic <input type="radio" name="transmission" value="automatic"
					<?php if(isset($_GET['transmission']) && $_GET['transmission'] == 'automatic') echo 'checked="checked"';?> ><br>
			</fieldset>
			<fieldset>
				mileage <input type="number" min="0" name="mileageMin" value="<?php if(isset($_GET['mileageMin'])) echo $_GET['mileageMin'];?>" >
						<input type="number" min="0" name="mileageMax" value="<?php if(isset($_GET['mileageMax'])) echo $_GET['mileageMax'];?>"><br>
			</fieldset>
			<br><input type="submit" name="sent" value="Find a car">
		</fieldset>
	</form><br>

	<div id="resultMsg"></div>
</body>
</html>
