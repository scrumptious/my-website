document.addEventListener("DOMContentLoaded", function() {
	(function() {
		alert('dom child added');
		var p = document.createElement('p');
		var node = document.createTextNode("This one is new!");
		p.appendChild(node);
		var c = document.getElementsByClassName("container")[0];
		var nav_row = document.getElementsByClassName("nav_row")[0];
		c.insertBefore(p, nav_row);
	})();
});