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
			
		<!-- <div class="col-xs-12 col-sm-12 col-md-5"> -->
		<div class="row">
			<div class="col-md-1 col-xs-1 col-sm-1 form-col bordered"></div>
			<div class="col-md-1 col-xs-1 col-sm-1 form-col bordered">lines</div>
			<div class="col-md-1 col-xs-1 col-sm-1 form-col bordered">triangles</div>
			<div class="col-md-1 col-xs-1 col-sm-1 form-col bordered">circles</div>
			<div class="col-md-1 col-xs-1 col-sm-1 form-col bordered">hexagons</div>
		</div><br>
		<!-- </div>	 -->
		<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
		<div class="row">
			<!-- <div class="col"></div> -->
			<div class="col-xs-1 col-sm-1 col-md-1 form-col bordered"></div>
			<div class="col-xs-1 col-sm-1 col-md-1 form-col bordered"><input type="range" name="linesNumber" id="linesNumber" min="0" max="10" ng-model="draw.linesNumber">{{draw.linesNumber}}</div>
			<div class="col-xs-1 col-sm-1 col-md-1 form-col bordered"><input type="range" name="trianglesNumber" id="trianglesNumber" min="0" max="10" ng-model="draw.trianglesNumber">{{draw.trianglesNumber}}</div>
			<div class="col-xs-1 col-sm-1 col-md-1 form-col bordered"><input type="range" name="circlesNumber" id="circlesNumber" min="0" max="10" ng-model="draw.circlesNumber">{{draw.circlesNumber}}</div>
			<div class="col-xs-1 col-sm-1 col-md-1 form-col bordered"><input type="range" name="hexagonsNumber" id="hexagonsNumber" min="0" max="10" ng-model="draw.hexagonsNumber">{{draw.hexagonsNumber}}</div>
		</div><br>
		<div class="row">
			<div class="col-sm-1 col-xs-1 col-md-1 form-col">lines width:</div>
			<div class="col-sm-1 col-xs-1 col-md-1 form-col"><input min="0" step="1" max="100" type="range" name="linesWidth" id="linesWidth" ng-model="draw.linesWidth">{{draw.linesWidth}}</div>
			<div class="col-sm-1 col-xs-1 col-md-1 form-col"><input min="0" step="1" max="100" type="range" name="trianglesWidth" id="trianglesWidth" ng-model="draw.trianglesWidth">{{draw.trianglesWidth}}</div>
			<div class="col-sm-1 col-xs-1 col-md-1 form-col"><input min="0" step="1" max="100" type="range" name="circlesWidth" id="circlesWidth" ng-model="draw.circlesWidth">{{draw.circlesWidth}}</div>
			<div class="col-sm-1 col-xs-1 col-md-1 form-col"><input min="0" step="1" max="100" type="range" name="hexagonsWidth" id="hexagonsWidth" ng-model="draw.hexagonsWidth">{{draw.hexagonsWidth}}</div>

			<!-- <div class="col-md-1"></div> -->
		</div><br>
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1 form-col">color: </div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="color" name="lines_color" id="lines_color" ng-model="draw.lines_color"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="color" name="circles_color" id="circles_color" ng-model="draw.circles_color"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="color" name="triangles_color" id="triangles_color" ng-model="draw.triangles_color"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="color" name="hexagons_color" id="hexagons_color" ng-model="draw.hexagons_color"></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="button" value="draw" id="redrawLines" ng-click="draw.redrawLines()" class="btn btn-primary"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="button" value="draw" id="redrawTriangles" ng-click="draw.redrawTriangles()" class="btn btn-primary"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="button" value="draw" id="redrawCircles" ng-click="draw.redrawCircles()" class="btn btn-primary"></div>
			<div class="col-md-1 col-sm-1 col-xs-1 form-col"><input type="button" value="draw" id="redrawHexagons" ng-click="draw.redrawHexagons()" class="btn btn-primary"></div>
		</div>
		<div class="row">
			<div class="col-md-2 form-col"><button type="submit" value="drawn" id="drawn" ng-click="draw.drawCanvas()" class="button">Draw</button></div>
			<div class="col-md-2 form-col"><button type="submit" value="redrawn" id="redrawn" ng-click="draw.redraw()" class="btn btn-primary">Redraw all</button></div>
			<div class="col-md-2 form-col"><button type="submit" value="reset" id="reset" ng-click="draw.clearCanvas()" class="btn btn-primary">Reset</button></div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center">
				<a href="" id="save" ng-click="draw.saveImage()">Save Image</a>
			</div>
		</div>

		</fieldset>
	</form>

<script src="<?=assets_url();?>js/app.js"></script>