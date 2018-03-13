	<div class="row"><hr></div>
			<div class="canvases">
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvLines" class="cnv">
					Your canvas does not support HTML 5 Canvas tag
				</canvas>
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvTriangles" class="cnv">
				</canvas>
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvSquares" class="cnv">
				</canvas>
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvCircles" class="cnv">
				</canvas>
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvHexagons" class="cnv">
				</canvas>
				<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvImage" class="cnv">
				</canvas>
			</div>
	<div class="col-xl-6 form">
		
	<form>
	<fieldset>
	<legend>generate canvas</legend>
		<!-- shapes to draw, amount,  -->

		<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
			<div class="col bordered">shape</div>
			<div class="col bordered">lines</div>
			<div class="col bordered">triangles</div>
			<div class="col bordered">circles</div>
			<div class="col bordered">hexagons</div>
		<!-- </div>	 -->
		<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
			<div class="col bordered">shape</div>
			<div class="col bordered">lines</div>
			<div class="col bordered">triangles</div>
			<div class="col bordered">circles</div>
			<div class="col bordered">hexagons</div>
		<!-- </div> -->
	</div>
	<!-- ===================================================================================================================== -->

<!-- <form>
	<fieldset>
	<legend>canvas generator</legend>
	<table>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th><br>
		<tr>
			<td><p>amount</p></td>
			<td><input type="number" name="linesNumber" id="linesNumber" min="0" max="10" ng-model="draw.linesNumber"></td>
			<td><input type="number" name="trianglesNumber" id="trianglesNumber" min="{0" max="10" ng-model="draw.trianglesNumber"></td>
			<td><input type="number" name="circlesNumber" id="circlesNumber" min="0" max="10" ng-model="draw.circlesNumber"></td>
			<td><input type="number" name="hexagonsNumber" id=hexagonsNumber" min="0" max="10" ng-model="draw.hexagonsNumber"></td>
			
		</tr>
		<tr>
			<td>lines width: </td><td><input min="0" step="1" max="100" type="number" name="linesWidth" id="linesWidth" ng-model="draw.linesWidth"></td>
			<td><input min="0" step="1" max="100" type="number" name="trianglesWidth" id="trianglesWidth" ng-model="draw.trianglesWidth"></td>
			<td><input min="0" step="1" max="100" type="number" name="circlesWidth" id="circlesWidth" ng-model="draw.circlesWidth"></td>
			<td><input min="0" step="1" max="100" type="number" name="hexagonsWidth" id="hexagonsWidth" ng-model="draw.hexagonsWidth"></td>
		</tr>

		<tr>
			<td>line color: </td>
			<td><input type="color" name="lines_color" id="lines_color" ng-model="draw.lines_color"></td>
			<td><input type="color" name="circles_color" id="circles_color" ng-model="draw.circles_color"></td>
			<td><input type="color" name="triangles_color" id="triangles_color" ng-model="draw.triangles_color"></td>
			<td><input type="color" name="hexagons_color" id="hexagons_color" ng-model="draw.hexagons_color"></td>
		</tr>


		<tr>
			<td></td>
			<td><input type="button" value="draw" id="redrawLines" ng-click="draw.redrawLines()"></td>
			<td><input type="button" value="draw" id="redrawTriangles" ng-click="draw.redrawTriangles()"></td>
			<td><input type="button" value="draw" id="redrawCircles" ng-click="draw.redrawCircles()"></td>
			<td><input type="button" value="draw" id="redrawHexagons" ng-click="draw.redrawHexagons()"></td>
		</tr>
		</table><br>

		<button type="submit" value="drawn" id="drawn" ng-click="draw.drawCanvas()">Draw</button>
		<button type="submit" value="redrawn" id="redrawn" ng-click="draw.redraw()">Redraw all</button>
		<button type="submit" value="reset" id="reset" ng-click="draw.clearCanvas()">Reset</button>


		<a href="" id="save" ng-click="draw.saveImage()">Save Image</a>
	</fieldset> 
</form>






 -->
<script src="<?=assets_url();?>js/app.js"></script>