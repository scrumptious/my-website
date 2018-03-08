	<!-- 					<script>
							$(function() {

								// $("form").css("display: none");
								$(".canvases").show(400);
								$("form").fadeIn(1000);
							});
						</script> -->
		</div><!--end of row-->
	</div><!--end of container-->
	<div class="canvases">
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvLines">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvTriangles">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvSquares">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvCircles">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvHexagons">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
			<canvas width="{{draw.canvasWidth}}" height="{{draw.canvasHeight}}" id="cnvImage">
			Your canvas does not support HTML 5 Canvas tag
			</canvas>
	</div>
	<div id="form" class="asideContainer">
		<form>
			<fieldset>
			<legend>Shapes Generator</legend>
			<!-- shapes to draw, amount,  -->
			<table>
			<tr>
				<th>shape</th>
				<th>lines</th>
				<th>triangles</th>
				<th>circles</th>
				<th>hexagons</th>
			</tr>
				<tr><td><br><br></td></tr>
			<tr>
				<td><p><strong>Amount</strong></p></td>
				<td><input type="range" name="linesNumber" id="linesNumber" min="0" max="5" ng-model="draw.linesNumber" /><p class="numb">{{draw.linesNumber}}</p></td>
				<td><input type="range" name="trianglesNumber" id="trianglesNumber" min="0" max="5" ng-model="draw.trianglesNumber" /><p class="numb">{{draw.trianglesNumber}}</p></td>
				<td><input type="range" name="circlesNumber" id="circlesNumber" min="0" max="5" ng-model="draw.circlesNumber" /><p class="numb">{{draw.circlesNumber}}</p></td>
				<td><input type="range" name="hexagonsNumber" id="hexagonsNumber" min="0" max="5" ng-model="draw.hexagonsNumber" /><p class="numb">{{draw.hexagonsNumber}}</p></td>
			</tr>
				<tr><td><br><br></td></tr>

			<tr>
				<td><p><strong>Lines width</strong></p></td>
				<td><input type="range" min="1" step="1" max="25" name="linesWidth" id="linesWidth" ng-model="draw.linesWidth" /><p class="numb">{{draw.linesWidth}}</p></td>
				<td><input type="range" min="1" step="1" max="25" name="trianglesWidth" id="trianglesWidth" ng-model="draw.trianglesWidth" /><p class="numb">{{draw.trianglesWidth}}</p></td>
				<td><input type="range" min="1" step="1" max="25" name="circlesWidth" id="circlesWidth" ng-model="draw.circlesWidth" /><p class="numb">{{draw.circlesWidth}}</p></td>
				<td><input type="range" min="1" step="1" max="25" name="hexagonsWidth" id="hexagonsWidth" ng-model="draw.hexagonsWidth" /><p class="numb">{{draw.hexagonsWidth}}</p></td>
			</tr>
				<tr><td><br><br></td></tr>

			<tr>
				<td><p><strong>Line color</strong> </p></td>
				<td><input type="color" name="lines_color" id="lines_color" ng-model="draw.lines_color"></td>
				<td><input class="color_control" type="color" name="triangles_color" id="triangles_color" ng-model="draw.triangles_color"></td>
				<td><input class="color_control" type="color" name="circles_color" id="circles_color" ng-model="draw.circles_color"></td>
				<td><input class="color_control" type="color" name="hexagons_color" id="hexagons_color" ng-model="draw.hexagons_color"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" value="draw" class="button" id="redrawLines" ng-click="draw.redrawLines()"></td>
				<td><input type="button" value="draw" class="button" id="redrawTriangles" ng-click="draw.redrawTriangles()"></td>
				<td><input type="button" value="draw" class="button" id="redrawCircles" ng-click="draw.redrawCircles()"></td>
				<td><input type="button" value="draw" class="button" id="redrawHexagons" ng-click="draw.redrawHexagons()"></td>
			</tr>
			</table><br>

			<button type="submit" value="drawn" class="button" id="drawn" ng-click="draw.drawCanvas()">draw all</button>
			<button type="submit" value="redrawn" class="button" id="redrawn" ng-click="draw.redraw()">redraw all</button>
			<button type="submit" value="reset" class="button" id="reset" ng-click="draw.clearCanvas()">reset</button>

			<br><br>
			<a href="" id="save" ng-click="draw.saveImage()">Save Image</a>
			</fieldset> 
		</form>
	</div>
	<br>
	<!-- <div class="info">
	{{draw.showInfo()}}</div> -->
	<img src="" alt="full canvas image (all layers)" id="myImg" hidden="hidden">