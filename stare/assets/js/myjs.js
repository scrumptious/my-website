function getElemProp(id, prop) {
	if(window.getComputedStyle) {
		var elem = document.getElementById(id);
		if(elem) {
			return window.getComputedStyle(elem, null).getPropertyValue(prop);
		}
	}
}

document.addEventListener("DOMContentLoaded", function() {
	(function() {
		// var t = document.getElementById("test");
		// t.classList.add("horTrans");
		// document.getElementById("bar").classList.add("transBar");
		var c = document.getElementsByClassName("container")[0];
		c.classList.add("zoom");

		// if(document.getComputedStyle) {
		// 	var cont = document.getElementsByClassName("container")[0];
		// 	var style = document.getComputedStyle(cont);
		// 	alert(style.getPropertyValue());
		// }
		// var d = document.createElement("div");
		// var body = document.getElementsByTagName("body");
		// document.body.appendChild(d);
		// d.className("container");
		// d.classList.add("zoom");
		// cont.classList.add("zoom");
	})();

	// var b = document.getElementById("cube_control");
	// b.addEventListener("click", function(e) {
	// 	var t = document.getElementById("test");
	// 	if(this.innerHTML==="Start") {
	// 		this.innerHTML="Stop";	
	// 		t.classList.add("horTrans");
	// 	}
	// 	else {
	// 		this.innerHTML="Start";
	// 		var te = document.getElementById("test");
	// 		var ml=getElemProp("test","width");
	// 		te.style.width=ml;
	// 		te.classList.remove("horTrans");
	// 	}
	// });

});