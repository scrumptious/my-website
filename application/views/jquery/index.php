	<script>
		$(function() {
			// console.dir($.tools.tabs.conf);
			$j("ul#tabs").tabs("div#panes > div");
		});
	</script>

		</div><!--end of row-->
	</div><!--end of container-->
	<h3 id="h3_subtitle">jQuery effects you can try</h3>

	<div id="wrap_tabs">
		<ul id="tabs">
			<li><a id="t1" href="#hide">Hide content</a></li>
			<li><a id="t2" href="#resize">Resize</a></li>
			<li><a id="t3" href="#style">Change style</a></li>
			<li><a id="t4" href="#todo">To do</a></li>
		</ul>
		<div id="panes">
			<br clear="all" />
			<div>Different effects of hiding content
				<select name="hide_effects" id="hide_effects">
					<option value="none">none</option>
					<option value="hide">hide</option>
					<option value="fadeOut">fadeOut</option>
					<option value="slideUp">slideUp</option>
				</select>
				<br><br>
				<p id="edit"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
				<!-- scripting for hiding content effects -->
					<script>
						var $j = jQuery.noConflict();
						$j(function() {
							var $hide = $j("#hide_effects");
							$j("#hide_effects").change(function() {
								var elem = $j( this );
								if(elem.attr("value") == "hide") {
									$j("#edit").hide(1000).delay(500).toggle(10);
								}
								else if(elem.attr("value") == 'fadeOut') {
									$j("#edit").fadeOut(1000).delay(500).show(10);
								}
								else if(elem.attr("value") == 'slideUp') {
									$j("#edit").slideUp(1000).delay(500).toggle(10);
								}
								console.log('value has changed to ' + elem.attr("value"));
							}
						);
					});
					</script>
			<div>Point a picture to enlarge
				<img src="<?=assets_url();?>/imgs/quote.jpg" alt="quote" width="150" height="150"><br>	
				<script>
					$(function() {
						$j("div img").animate({opacity: 0.25});

						$j("div img").mouseover(function(){ 
							$j("div img").animate({ width: 250, height: 250, opacity: "+=0.75"}, 500);
						});
						$j("div img").mouseout(function(){ 
							$j("div img").animate({ width: 150, height: 150, opacity: "-=0.75"}, 300);
						});					
						var square = $j("#panes div").eq(3);
						var smlsquare = $j("#panes div").eq(4);
						var clr = $j("[id=color]");
						clr.change(function() {
							square.css("background-color", clr.attr("value"));
						});
						var txtclr = $j("[id=textcolor]");
						txtclr.change(function() {
							square.css("color", txtclr.attr("value"));
						});
						var smlclr = $j("[id=smlcolor]");
						smlclr.change(function() {
							smlsquare.css("background-color", smlclr.attr("value"));
						});
					}); 
				</script>
			</div>
			<div>Choose a square color
				<input type="color" name="color" id="color">
				and text color
				<input type="color" name="textcolor" id="textcolor">
				small square
				<input type="color" name="smlcolor" id="smlcolor">

				<div style="width: 140px; height: 140px; border: 1px solid black; background-color: white; padding: 10px;">test square</div>
				<div style="width: 60px; height: 60px; background-color: orange;position: absolute; top:490px; left:250px;"></div>
			</div>
			<div>
				To do

			</div>
		</div>
	</div>