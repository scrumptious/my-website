var app = angular.module('generatorApp', []);
app.controller('drawCtrl', drawCtrl);
function drawCtrl() {
	this.linesWidth = 1;
	this.trianglesWidth = 1;
	this.circlesWidth = 1;
	this.hexagonsWidth = 1;
	this.linesNumber = 1;
	this.trianglesNumber = 1;
	this.circlesNumber = 1;
	this.hexagonsNumber = 1;
	this.canvasWidth=640;
	this.canvasHeight=480;
	this.aSize='aSize';
	this.aSizeL=[200, 250, 300];
	this.aSizeT=[40,100,180];
	this.aSizeS=[40,80,150];
	this.aSizeC=[30,50,70];
	this.aSizeH=[30,60,90];
	this.sizeMult=1.5;  //size multiplier
	this.degToRad=Math.PI/180;
	this.configCanvas();
};

drawCtrl.prototype.myRand = function(min, max) {
	return Math.floor((Math.random()*(max-min+1)+min));
};
	//choose position of the first vertex of the line (the most to the left)
drawCtrl.prototype.posReset = function(shape) {
	if(shape=='L') {
		if(this.angD>=0 && this.angD<=30) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size/3));
			this.posY=this.myRand(this.size,(this.canvasHeight-10));
		}
		else if(this.angD>150 && this.angD<=180){
			this.posX=this.myRand(10,(this.canvasWidth-this.size/3));
			this.posY=this.myRand(10,(this.canvasHeight-this.size));
		}

		else if(this.angD>30 && this.angD<=45) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size/2));
			this.posY=this.myRand(this.size/1.3,(this.canvasHeight-10));
		}
		else if(this.angD>135 && this.angD<=150) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size/2));
			this.posY=this.myRand(10,(this.canvasHeight-this.size));
		}

		else if(this.angD>45 && this.angD<=60) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size/1.3));
			this.posY=this.myRand(this.size/2,(this.canvasHeight-10));
		}
		else if(this.angD>120 && this.angD<=135) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size/1.3));
			this.posY=this.myRand(10,(this.canvasHeight-this.size));
		}	
		else if(this.angD>60 && this.angD<=90) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size));
			this.posY=this.myRand(this.size/3,(this.canvasHeight-10));
		}
		else if(this.angD>90 && this.angD<=120) {
			this.posX=this.myRand(10,(this.canvasWidth-this.size));
			this.posY=this.myRand(10,(this.canvasHeight-this.size));
		} 
	}
	else if(shape=='H') {
		this.posX=this.myRand(this.size/2,(this.canvasWidth-this.size/2));
		this.posY=this.myRand(this.size/2,(this.canvasHeight-this.size/2));
	}
	//other shapes than lines
	else {
		this.posX=this.myRand(this.size,(this.canvasWidth-this.size));
		this.posY=this.myRand(this.size,(this.canvasHeight-this.size));
	}
};
drawCtrl.prototype.pathReset = function(cnv) {
	this.ctx[cnv].beginPath();
	this.posX=this.myRand(10,this.canvasWidth-10);		// this.posX=this.myRand(this.size,(this.canvasWidth-this.size));
	this.posY=this.myRand(10,this.canvasHeight-10);		// this.posY=this.myRand(this.size,(this.canvasHeight-this.size));
};
drawCtrl.prototype.preDrawing = function(shape, i) {
			/*function sets random size, angle  within a canvas object*/

			//find out what size we need to draw
			var s=this.aSize+shape;
			this.sizeRand=this.myRand(0,this[s].length-1);
			this.size=this.myRand(this[s][this.sizeRand], this[s][this.sizeRand]*this.sizeMult)
			//fint out what's the angle
			if(shape!='C') {
				this.angD=this.myRand(0,180)
				this.ang=this.angD*this.degToRad;
			}
};
drawCtrl.prototype.lines = function() {
	if(this.linesNumber==0) {return;}
	else {

		for(var i=0; i<this.linesNumber; i++) {
			if(i==0) {
				this.preDrawing('L', i);
				if(this.linesWidth==1) {
					this.ctx[0].lineWidth = this.linesWidth;
				}
				else {
					this.ctx[0].lineWidth = 1+this.linesWidth/5;
				}
				this.posReset('L');
				tmpPosX=this.posX;
				tmpPosY=this.posY;
				
				//move to the point and draw a line
				this.ctx[0].moveTo(this.posX,this.posY);
				this.posX=this.posX+Math.sin(this.ang)*this.size;
				this.posY=this.posY-Math.cos(this.ang)*this.size;
				this.ctx[0].lineTo(this.posX,this.posY);
			}
			else {
				this.preDrawing('L', i);
				this.posXChange=this.posX-tmpPosX;
				this.posYChange=this.posY-tmpPosY;

				if(this.angD<=90) {
					this.posX=this.myRand(tmpPosX,tmpPosX+this.posXChange/2);
					this.posY=this.myRand(tmpPosY,tmpPosY+this.posYChange/2);
					this.ctx[0].moveTo(this.posX,this.posY);
					this.angD=this.myRand(this.angD+30,this.angD+90);
					this.ang=this.angD*this.degToRad;
					this.posY=this.posY-Math.cos(this.ang)*this.size;
				}
				else {		//angle: 91-180
					this.posX=this.myRand(tmpPosX+this.posXChange/2,this.posX);
					this.posY=this.myRand(tmpPosY+this.posYChange/2,this.posY);
					this.ctx[0].moveTo(this.posX,this.posY);
					this.angD=this.myRand(0,90);
					this.posY=this.posY+Math.cos(this.ang)*this.size;
				}
				this.posX=this.posX+Math.sin(this.ang)*this.size;
				this.ctx[0].lineTo(this.posX,this.posY);
			}
		}
	}
	this.ctx[0].strokeStyle = this.lines_color;
	this.ctx[0].stroke();
};
drawCtrl.prototype.triangles = function() {
	if(this.trianglesNumber==0) {return;}
	else {
		for(var i=0;i<this.trianglesNumber;i++) {
			this.preDrawing('T', i);
			if(this.trianglesWidth==1) {
				this.ctx[1].lineWidth = this.trianglesWidth;
			}
			else {
				this.ctx[1].lineWidth = 1+this.trianglesWidth/5;
			}
			this.posReset('T');
			this.ctx[1].beginPath();
			var tmpX=this.posX;
			var tmpY=this.posY;
			this.angD=this.myRand(1,360);
			this.ang=this.angD*this.degToRad;
			this.ctx[1].moveTo(this.posX,this.posY);
			this.posX=this.posX+Math.cos(this.ang)*this.size;
			this.posY=this.posY-Math.sin(this.ang)*this.size;
			this.ctx[1].lineTo(this.posX,this.posY);

			this.ctx[1].moveTo(this.posX,this.posY);
			this.posX=this.posX+Math.cos(this.ang+2*Math.PI/3)*this.size;
			this.posY=this.posY-Math.sin(this.ang+2*Math.PI/3)*this.size;
			this.ctx[1].lineTo(this.posX,this.posY);
			this.ctx[1].moveTo(this.posX,this.posY);
			this.posX=tmpX;
			this.posY=tmpY;
			this.ctx[1].lineTo(this.posX,this.posY);
			this.ctx[1].strokeStyle = this.triangles_color;
			this.ctx[1].stroke();
		}
	}
};
drawCtrl.prototype.squares = function() {
	for(var i=0;i<this.squaresNumber;i++) {
		this.preDrawing('S', i);
		this.pathReset(2);
	}
};
drawCtrl.prototype.circles = function() {
	for(var i=0;i<this.circlesNumber;i++) {
		this.preDrawing('C', i);
		if(this.circlesWidth==1) {
			this.ctx[3].lineWidth = this.circlesWidth;
		}
		else {
			this.ctx[3].lineWidth = 1+this.circlesWidth/5;
		}
		this.pathReset(3);
		this.ctx[3].arc(this.posX,this.posY,this.size,0,2*Math.PI);
		this.ctx[3].strokeStyle = this.circles_color;
		this.ctx[3].stroke();
	}

};
drawCtrl.prototype.hexagons = function() {
	for(var i=0;i<this.hexagonsNumber;i++) {
		this.pathReset(4);
		this.preDrawing('H', i);
		if(this.hexagonsWidth==1) {
			this.ctx[4].lineWidth = this.hexagonsWidth;
		}
		else {
			this.ctx[4].lineWidth = 1+this.hexagonsWidth/5;
		}
		this.ctx[4].moveTo(this.posX,this.posY);
		this.posX=this.posX+Math.sin(this.ang)*this.size;
		this.posY=this.posY-Math.cos(this.ang)*this.size;
		this.ctx[4].lineTo(this.posX,this.posY);
		for(var j=0;j<5;j++) {
			this.ang+=60*this.degToRad;
			this.posX=this.posX+Math.sin(this.ang)*this.size;
			this.posY=this.posY-Math.cos(this.ang)*this.size;
			this.ctx[4].lineTo(this.posX,this.posY);
		}
			this.ctx[4].strokeStyle = this.hexagons_color;
			this.ctx[4].stroke();
			this.ctx[4].closePath();
	}
};
drawCtrl.prototype.clearCanvas = function(cnv=-5) {
	if(cnv==-5) {
		for(var i=0;i<this.canvas.length;i++) {
			this.ctx[i].beginPath();
			this.ctx[i].clearRect(0,0,this.canvasWidth,this.canvasHeight);
		}
	}
	else {
		this.ctx[cnv].beginPath();
		this.ctx[cnv].clearRect(0,0,this.canvasWidth,this.canvasHeight);
	}
};
drawCtrl.prototype.drawCanvas = function(cnv) {
	this.lines();
	this.triangles();
	this.squares();
	this.circles();
	this.hexagons();
};
drawCtrl.prototype.redraw = function() {
	for(var i=0;i<this.canvas.length;i++) {
		// this.configCanvas(i);
		this.clearCanvas(i);
	}
	this.drawCanvas();
};
drawCtrl.prototype.redrawLines = function() {
	// this.configCanvas(0);
	this.clearCanvas(0);
	this.lines();
}
drawCtrl.prototype.redrawTriangles = function() {
	// this.configCanvas(1);
	this.clearCanvas(1);
	this.triangles();
}
drawCtrl.prototype.redrawSquares = function() {
	// this.configCanvas(2);
	this.clearCanvas(2);
	this.squres();
}
drawCtrl.prototype.redrawCircles = function() {
	// this.configCanvas(3);
	this.clearCanvas(3);
	this.circles();
}
drawCtrl.prototype.redrawHexagons = function() {
	// this.configCanvas(4);
	this.clearCanvas(4);
	this.hexagons();
}
/*drawCtrl.prototype.print = function() {
	var doc = document.getElementById('inform');
	doc.innerHTML = 'lines: ' + this.linesNumber + '<br>' +
					'triangles: '+ this.trianglesNumber + '<br>' +
					'squares: '+ this.squaresNumber + '<br>' +
					'circles: '+ this.circlesNumber + '<br>' +
					'hexagons: '+ this.hexagonsNumber + '<br>' +
					'------------------------------------------------------------------<br>' + 
					'posX= ' + this.posX + ' | posY= ' + this.posY + '<br>' +
					'actual size= ' + this.size + ' | angle= ' + this.angD;
					
};*/
drawCtrl.prototype.configCanvas = function() {
		this.canvas = [
		document.getElementById("cnvLines"),
		document.getElementById("cnvTriangles"),
		document.getElementById("cnvSquares"),
		document.getElementById("cnvCircles"),
		document.getElementById("cnvHexagons"),
		document.getElementById("cnvImage")];
		this.ctx = [
		this.canvas[0].getContext("2d"),
		this.canvas[1].getContext("2d"),
		this.canvas[2].getContext("2d"),
		this.canvas[3].getContext("2d"),
		this.canvas[4].getContext("2d"),
		this.canvas[5].getContext("2d")];
};
drawCtrl.prototype.saveImage = function() {
	for(var i=0;i<this.ctx.length-1;i++) {
		this.ctx[this.ctx.length-1].drawImage(this.canvas[i],0,0);
	}

	var w=window.open('about:blank','image from canvas');
	w.document.write("<img src='"+this.canvas[this.canvas.length-1].toDataURL("image/png")+"' alt='from canvas'/>");
	this.clearCanvas(this.canvas.length-1);

};
