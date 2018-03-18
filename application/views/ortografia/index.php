

	 <img src="<?=assets_url();?>imgs/cloud2.png" alt="a picture of cartoon cloud" hidden="hidden" id="cloud1">	 
	 <img src="<?=assets_url();?>imgs/ground-clipart-footer-5_2.png" alt="a picture of small cartoon cloud" hidden="hidden" id="cloud2">
	 <img src="<?=assets_url();?>imgs/grass.png" alt="a picture of grass" hidden="hidden" id="grass">
 	 <img src="<?=assets_url();?>imgs/round-button-green-small.png" alt="green button inactive" hidden="hidden" id="roundButtonGreen">
 	 <img src="<?=assets_url();?>imgs/round-button-green-active.png" alt="green button inactive" hidden="hidden" id="roundButtonGreenActive">

 	<div id="windows">
		<canvas id="canvas" width="800px" height="600px">Your browser does not support Canvas!</canvas>
		<canvas class="bordered" id="canvasBg" width="800px" height="600px"></canvas>
		<canvas class="bordered" id="canvasCloud1" width="800px" height="600px"></canvas>
		<canvas class="bordered" id="canvasCloud2" width="800px" height="600px"></canvas>

		<canvas class="bordered" id="canvasLevelCounter" width="130px" height="100px"></canvas>
		<canvas class="bordered" id="canvasPointsCounter" width="120px" height="100px"></canvas>
		<canvas class="bordered" id="canvasMenu" width="140px" height="140px"></canvas>		
		<canvas class="bordered" id="canvasDeepMenu" width="340px" height="340px"></canvas>	
		<canvas class="bordered" id="canvasButtonLeft" width="140px" height="140px"></canvas>
		<canvas class="bordered" id="canvasButtonRight" width="140px" height="140px"></canvas>
 	</div>
	<div class="row"><hr></div>
	<div class="row">
		<div class="on-the-right">
			<p>Game is all about choosing the right spelling of the current word!</p>
		</div>
	</div>
	
	

	<!-- <script src="engine.js"></script> -->
	<script src="<?=assets_url();?>js/wordsets.js"></script>
	<script src="<?=assets_url();?>js/engine.js"></script>
