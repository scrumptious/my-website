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
	<div class="col-12 col-sm-12 col-md-12 col-xl-6 form">
	<form>
	<fieldset>
	<legend>generate canvas</legend>
		<!-- shapes to draw, amount,  -->
			
		<!-- <div class="col-xs-12 col-sm-12 col-md-5"> -->
		<div class="row">				
				<div class="col-md-2 form-col"></div>
				<div class="col-md-2 form-col">lines</div>
				<div class="col-md-2 form-col">triangles</div>
				<div class="col-md-2 form-col">circles</div>
				<div class="col-md-2 form-col">hexagons</div>
		</div><br>
		<!-- </div>	 -->
		<!-- <div class="col-xs-12 col-sm-12 col-md-6"> -->
		<div class="row">
			<!-- <div class="col"></div> -->
			<div class="col-md-2 form-col"></div>
			<div class="col-md-2 form-col"><input type="range" name="linesNumber" id="linesNumber" min="0" max="10" ng-model="draw.linesNumber"><p class="in-the-middle">{{draw.linesNumber}}</p></div>
			<div class="col-md-2 form-col"><input type="range" name="trianglesNumber" id="trianglesNumber" min="0" max="10" ng-model="draw.trianglesNumber"><p class="in-the-middle">{{draw.trianglesNumber}}</p></div>
			<div class="col-md-2 form-col"><input type="range" name="circlesNumber" id="circlesNumber" min="0" max="10" ng-model="draw.circlesNumber"><p class="in-the-middle">{{draw.circlesNumber}}</p></div>
			<div class="col-md-2 form-col"><input type="range" name="hexagonsNumber" id="hexagonsNumber" min="0" max="10" ng-model="draw.hexagonsNumber"><p class="in-the-middle">{{draw.hexagonsNumber}}</p></div>
		</div><br>




		<div class="row">
			<div class="col-md-2 form-col">lines width:</div>
			<div class="col-md-2 form-col"><input min="0" step="1" max="30" type="range" name="linesWidth" id="linesWidth" ng-model="draw.linesWidth"><p class="in-the-middle">{{draw.linesWidth}}</p></div>
			<div class="col-md-2 form-col"><input min="0" step="1" max="30" type="range" name="trianglesWidth" id="trianglesWidth" ng-model="draw.trianglesWidth"><p class="in-the-middle">{{draw.trianglesWidth}}</p></div>
			<div class="col-md-2 form-col"><input min="0" step="1" max="30" type="range" name="circlesWidth" id="circlesWidth" ng-model="draw.circlesWidth"><p class="in-the-middle">{{draw.circlesWidth}}</p></div>
			<div class="col-md-2 form-col"><input min="0" step="1" max="30" type="range" name="hexagonsWidth" id="hexagonsWidth" ng-model="draw.hexagonsWidth"><p class="in-the-middle">{{draw.hexagonsWidth}}</p></p></div>

			<!-- <div class="col-md-1"></div> -->
		</div><br>






		<div class="row">
			<div class="col-md-2 form-col">color: </div>
			<div class="col-md-2 form-col"><input type="color" name="lines_color" id="lines_color" ng-model="draw.lines_color"></div>
			<div class="col-md-2 form-col"><input type="color" name="circles_color" id="circles_color" ng-model="draw.circles_color"></div>
			<div class="col-md-2 form-col"><input type="color" name="triangles_color" id="triangles_color" ng-model="draw.triangles_color"></div>
			<div class="col-md-2 form-col"><input type="color" name="hexagons_color" id="hexagons_color" ng-model="draw.hexagons_color"></div>
		</div>










		<div class="row">
			<div class="col-md-2 form-col"></div>
			<div class="col-md-2 form-col"><input type="button" value="Draw" id="redrawLines" ng-click="draw.redrawLines()" class="button"></div>
			<div class="col-md-2 form-col"><input type="button" value="Draw" id="redrawTriangles" ng-click="draw.redrawTriangles()" class="button"></div>
			<div class="col-md-2 form-col"><input type="button" value="Draw" id="redrawCircles" ng-click="draw.redrawCircles()" class="button"></div>
			<div class="col-md-2 form-col"><input type="button" value="Draw" id="redrawHexagons" ng-click="draw.redrawHexagons()" class="button"></div>
		</div><br>
		<div class="row"><hr></div>
		<div class="row">
			<div class="col-4 col-sm-4 col-md-3"><button type="submit" value="drawn" id="drawn" ng-click="draw.drawCanvas()" class="button">Draw</button></div>
			<div class="col-4 col-sm-4 col-md-3"><button type="submit" value="redrawn" id="redrawn" ng-click="draw.redraw()" class="button">Redraw&nbsp;all</button></div>
			<div class="col-4 col-sm-4 col-md-3"><button type="submit" value="reset" id="reset" ng-click="draw.clearCanvas()" class="button">Reset</button></div>
		</div><br>
		<div class="row">
			<div class="col-md-10 text-center">
				<a href="" id="save" ng-click="draw.saveImage()" class="big-link">Save Image</a>
			</div>
		</div>

		</fieldset>
	</form>
</div>

<script src="<?=assets_url();?>js/app.js"></script>
<br><br>