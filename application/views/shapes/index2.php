	<form>
	<fieldset>
	<legend>generate canvas</legend>
		<!-- shapes to draw, amount,  -->
			
		<!-- <div class="col-xs-12 col-sm-12 col-md-5"> -->
		<div class="row">
			<div class="col-md-1 bordered">shape</div>
			<div class="col-md-1 bordered">lines</div>
			<div class="col-md-1 bordered">triangles</div>
			<div class="col-md-1 bordered">circles</div>
			<div class="col-md-1 bordered">hexagons</div>
		</div><br>
		<!-- </div>	 -->
		<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
		<div class="row">
			<!-- <div class="col"></div> -->
			<div class="col-md-1 bordered"></div>
			<div class="col-md-1 bordered"><input type="range" name="linesNumber" id="linesNumber" min="0" max="10" ng-model="draw.linesNumber"></div>
			<div class="col-md-1 bordered"><input type="range" name="trianglesNumber" id="trianglesNumber" min="{0" max="10" ng-model="draw.trianglesNumber"></div>
			<div class="col-md-1 bordered"><input type="range" name="circlesNumber" id="circlesNumber" min="0" max="10" ng-model="draw.circlesNumber"></div>
			<div class="col-md-1 bordered"><input type="range" name="hexagonsNumber" id=hexagonsNumber" min="0" max="10" ng-model="draw.hexagonsNumber"></div>
		</div><br>
		<div class="row">
			<div class="col-md-1">lines width:</div>

			<div class="col-md-1"><input min="0" step="1" max="30" type="range" name="linesWidth" id="linesWidth" ng-model="draw.linesWidth"></div>

			<div class="col-md-1"><input min="0" step="1" max="100" type="range" name="trianglesWidth" id="trianglesWidth" ng-model="draw.trianglesWidth"></div>

			<div class="col-md-1"><input min="0" step="1" max="100" type="range" name="circlesWidth" id="circlesWidth" ng-model="draw.circlesWidth"></div>

			<div class="col-md-1"><input min="0" step="1" max="100" type="range" name="hexagonsWidth" id="hexagonsWidth" ng-model="draw.hexagonsWidth"></div>

			<!-- <div class="col-md-1"></div> -->
		</div><br>
		<div class="row">
			<div class="col-md-1">color: </div>
			<div class="col-md-1"><input type="color" name="lines_color" id="lines_color" ng-model="draw.lines_color"></div>
			<div class="col-md-1"><input type="color" name="circles_color" id="circles_color" ng-model="draw.circles_color"></div>
			<div class="col-md-1"><input type="color" name="triangles_color" id="triangles_color" ng-model="draw.triangles_color"></div>
			<div class="col-md-1"><input type="color" name="hexagons_color" id="hexagons_color" ng-model="draw.hexagons_color"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-1"><input type="button" value="draw" id="redrawLines" ng-click="draw.redrawLines()"></div>
			<div class="col-md-1"><input type="button" value="draw" id="redrawTriangles" ng-click="draw.redrawTriangles()"></div>
			<div class="col-md-1"><input type="button" value="draw" id="redrawCircles" ng-click="draw.redrawCircles()"></div>
			<div class="col-md-1"><input type="button" value="draw" id="redrawHexagons" ng-click="draw.redrawHexagons()"></div>
		</div>
		<div class="row">
			<div class="col-md-2"><button type="submit" value="drawn" id="drawn" ng-click="draw.drawCanvas()">Draw</button></div>
			<div class="col-md-2"><button type="submit" value="redrawn" id="redrawn" ng-click="draw.redraw()">Redraw all</button></div>
			<div class="col-md-2"><button type="submit" value="reset" id="reset" ng-click="draw.clearCanvas()">Reset</button></div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center">
				<a href="" id="save" ng-click="draw.saveImage()">Save Image</a>
			</div>
		</div>

		</fieldset>
	</form>