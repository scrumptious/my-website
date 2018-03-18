const picker = {
	width: 640,
	height: 320,
	canvas: document.getElementById('canvas'),
	ctx: this.canvas.getContext('2d'),
	offsetX: 208,
	offsetY: 247,
	radios: document.querySelectorAll('input[type="radio"]'),
	darkness: 0,
	selected: false
};
const generalInfo = {
	lastClickX: -1,
	lastClickY: -1
};

picker.ctx.fillStyle = 'red';

var square = {
	x: picker.width/4,
	y: picker.height/8,
	width: 20,
	height: 20
};


function update(progress) {

}
function draw() {

}
function drawColorSquares() {
	for(let i=0; i<7; i++) {
		for(let j=0; j<6; j++) {	
			switch(j) {
				case 0 : {
					picker.ctx.fillStyle = 'rgb(255, 0, ' + Math.floor(30 * i) + ')';
					break;
				}
				case 1: {
					picker.ctx.fillStyle = 'rgb(255, ' + Math.floor(50 + i * 36.4) +  ', 0)';
					break;
				}
				case 2: {
					picker.ctx.fillStyle = 'rgb(' + Math.floor(50 + i * 30.4) +  ', 255 , 0)';
					break;
				}
				case 3: {
					picker.ctx.fillStyle = 'rgb(0, 255, ' + Math.floor(40 + i * 28) + ')';
					break;
				}
				case 4: {
					picker.ctx.fillStyle = 'rgb(0, ' + Math.floor(i * 36.5) +  ', 255)';					
					break;
				}
				case 5: {
					picker.ctx.fillStyle = 'rgb(' + Math.floor(60 + i * 36.4) +  ', 0, 255)';
					break;
				}
				default: {
					picker.ctx.fillStyle = 'black';
					break;
				}
			}
			picker.ctx.fillRect( 0 + i * square.width,
										0 + j * square.height,
										square.width,
										square.height	);
		}
	}
}
function drawSimilarColorSqures(color) {
	let x = 150;
	let y = 150;
	let factor0, factor1, factor2;
	factor0 = (color[0]>200) ? -1 : 1;
	factor1 = (color[1]>200) ? -1 : 1;
	factor2 = (color[2]>200) ? -1 : 1;
	for(let i=0; i<4; i++) {
		for(let j=1; j<11; j++) {
			switch(i) {
				case 0: {
					picker.ctx.fillStyle='rgb(' 	+ (color[0]-15+j*5*factor0 + picker.darkness) + ', ' 
																+ (color[1]-10+j*5*factor1 + picker.darkness) + ', ' 
																+ (color[2] + picker.darkness) + ')';
					break;
				}
				case 1: {
					picker.ctx.fillStyle='rgb(' 	+ (color[0]-15+j*10*factor0 + picker.darkness) + ', ' 
																+ (color[1]-10+j*10*factor1 + picker.darkness) + ', ' 
																+ (color[2] + picker.darkness) + ')';
					break;
				}
				case 2: {
					picker.ctx.fillStyle='rgb(' 	+ (color[0] + picker.darkness) + ', ' 
																+ (color[1]-10+j*10*factor1 + picker.darkness) + ', ' 
																+ (color[2]+j*12*factor2 + picker.darkness) + ')';
					break;
				}
				case 3: {
					picker.ctx.fillStyle='rgb(' 	+ (color[0]-10+j*8*factor1 + picker.darkness) + ', ' 
																+ (color[1] + picker.darkness) + ', ' 
																+ (color[2]+j*14*factor2 + picker.darkness) + ')';
					break;
				}
			}
			
			picker.ctx.fillRect(	x + j * square.width*1.5 + j, 
										y + i * square.height*1.5 + i, 
										square.width*1.5,
										square.height*1.5);
		}
	}
}
function getColorsFromData(x, y) {
	const imageData = picker.ctx.getImageData(0,0,picker.width,picker.height);
	function getColorIndicesForCoord(x, y) {
		var red = y * (picker.width * 4) + x * 4;
		return [red, red+1, red+2, red+3];
	}
	var colorIndices = getColorIndicesForCoord(x, y, picker.width);
	var redIndex = colorIndices[0];
	var greenIndex = colorIndices[1];
	var blueIndex = colorIndices[2];
	var alphaIndex = colorIndices[3];

	var redForCoord = imageData.data[redIndex];
	var greenForCoord = imageData.data[greenIndex];
	var blueForCoord = imageData.data[blueIndex];
	var alphaForCoord = imageData.data[alphaIndex];
	return [redForCoord, greenForCoord, blueForCoord, alphaForCoord];
}	
function drawOnce() {
	drawColorSquares();
}	//end of drawOnce

function loop(timestamp) {
	var progress = lastRender - timestamp;
	update(progress);
	if(lastRender==0) {
		drawColorSquares();
	}
	draw();

	lastRender = timestamp;
	// window.requestAnimationFrame(loop);
}

var lastRender = 0;
window.requestAnimationFrame(loop);
function rgbToHex(r, g, b) {
	function componentToHex(component) {
		let hex = component.toString(16);
		hex = hex.length==1 ? 0 + hex : hex;
		return hex;
	}
	return componentToHex(r) + componentToHex(g) + componentToHex(b);
}
function applyChosenColor(color) {
	let form, r, g, b, a, h, textDiv, squareDiv;
	function jumpTwoSiblings(element) {
		return element.nextElementSibling.nextElementSibling;
	}
	form = document.querySelector('form');
	r = form.firstElementChild.nextElementSibling;
	g = jumpTwoSiblings(r);
	b = jumpTwoSiblings(g);
	h = (jumpTwoSiblings(b));
	textDiv = document.querySelector('.colorDiv');
	squareDiv = document.querySelector('.colorSquare');
	r.value = color[0];
	g.value = color[1];
	b.value = color[2];
	h.value = rgbToHex(color[0], color[1], color[2]);
	textDiv.style.color = '#' + h.value;
	squareDiv.style.backgroundColor = '#' + h.value;
}
function radiosChange() {
	if(picker.radios[1].checked) {
		picker.darkness = 80;
	}
	else if(picker.radios[2].checked) {
		picker.darkness = -80;
	}
	else {
		picker.darkness = 0;
	}
}
function clearColorSquares() {
	picker.ctx.clearRect(-1, -1, 142, 122);
}
function selectSquare(x, y) {
		x = Math.floor(x/square.width);
		y = Math.floor(y/square.width);
		picker.ctx.strokeStyle = '#000';
		picker.ctx.strokeRect(	x*square.width, 
														y*square.height,
														square.width,
														square.height);
		picker.selected = true;
		generalInfo.lastClickX = x;
		generalInfo.lastClickY = y;
}
function canvasClick(e) {
	var mouseX = e.pageX - picker.offsetX;
	var mouseY = e.pageY - picker.offsetY;
	let color = getColorsFromData(mouseX, mouseY);
	let hexColor = rgbToHex(color[0], color[1], color[2]);
	if(hexColor!='000000') {
		applyChosenColor(color);
	}
	if(hexColor!='000000' && mouseX<=140 && mouseY<=120) {
		if(picker.selected) {
			clearColorSquares();
			drawColorSquares();
		}
		selectSquare(mouseX, mouseY);
		drawSimilarColorSqures(color);
	}
}




document.addEventListener("DOMContentLoaded", function() {
	picker.canvas.addEventListener('click', function(e) {
		radiosChange();
		canvasClick(e);
	});


});