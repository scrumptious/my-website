(function() {
	document.addEventListener("DOMContentLoaded", function() {
		var cars = [
		  {
		    "id": "00000001",
		    "modelId": "ac5c3b18-6804-4e34-ac19-cf3d693f5cdf",
		    "mileage": 25000,
		    "registration": "PS128DE",
		    "transmission": "Manual",
		    "owners": 1,
		    "description": "<title>Car advert</title><h1>Car ad title</h1><p>Lorem ipsum dolor</p>",
		    "price": 13250,
		    "photos": [
		      "http://www.someurl.com/00000001/image0001.jpg",
		      "http://www.someurl.com/00000001/image0002.jpg",
		      "http://www.someurl.com/00000001/image0003.jpg"
		    ]
		  },
		  {
		    "id": "00000002",
		    "modelId": "7ee87de1-a30f-4666-9741-726c9facbba7",
		    "mileage": 95000,
		    "registration": "LS05DTR",
		    "transmission": "Manual",
		    "owners": 2,
		    "description": "<title>Car advert</title><h1>Car ad title</h1><p>Lorem ipsum dolor</p>",
		    "price": 6000,
		    "photos": [
		      "http://www.someurl.com/00000002/image0001.jpg",
		      "http://www.someurl.com/00000002/image0002.jpg",
		      "http://www.someurl.com/00000002/image0003.jpg"
		    ]
		  },
		  {
		    "id": "00000003",
		    "modelId": "5905c84b-4a70-47c9-be56-e814553b3015",
		    "mileage": 12000,
		    "registration": "LD58UBQ",
		    "transmission": "Manual",
		    "owners": 1,
		    "description": "<title>Car advert</title><h1>Car ad title</h1><p>Lorem ipsum dolor</p>",
		    "price": 18000,
		    "photos": [
		      "http://www.someurl.com/00000003/image0001.jpg",
		      "http://www.someurl.com/00000003/image0002.jpg",
		      "http://www.someurl.com/00000003/image0003.jpg"
		    ]
		  },
		  {
		    "id": "00000004",
		    "modelId": "5905c84b-4a70-47c9-be56-e814553b3015",
		    "mileage": 45000,
		    "registration": "LD58UBQ",
		    "transmission": "Automatic",
		    "owners": 2,
		    "description": "<title>Car advert</title><h1>Car ad title</h1><p>Lorem ipsum dolor</p>",
		    "price": 12000,
		    "photos": [
		      "http://www.someurl.com/00000004/image0001.jpg",
		      "http://www.someurl.com/00000004/image0002.jpg",
		      "http://www.someurl.com/00000004/image0003.jpg"
		    ]
		  }
		];
		var models = [
		  {
		    "modelId": "ac5c3b18-6804-4e34-ac19-cf3d693f5cdf",
		    "co2Emmissions": 124,
		    "mpg": "54.3",
		    "enginePower": 69,
		    "engineSize": 1229,
		    "fuelType": "Petrol"
		  },
		  {
		    "modelId": "7ee87de1-a30f-4666-9741-726c9facbba7",
		    "co2Emmissions": 230,
		    "mpg": "54.3",
		    "enginePower": 185,
		    "engineSize": 2259,
		    "fuelType": "Petrol"
		  },
		  {
		    "modelId": "5905c84b-4a70-47c9-be56-e814553b3015",
		    "co2Emmissions": 165,
		    "mpg": "54.3",
		    "enginePower": 130,
		    "engineSize": 1798,
		    "fuelType": "Diesel"
		  }
		];
		var getData = new QueryData();
		var filterSet = [];
		var result = [];
		var resultMsg = document.getElementById("resultMsg");
		//------------------------------------------------
		// function processResponse(response) {
		// 	var r = response;
		// 	console.log("response: " + r);
		// }
		// function getRequest(url) {
		// 	var xhttp = new XMLHttpRequest();
		// 	xhttp.onreadystatechange = function() {
		// 		if(xhttp.readyState == 4 && xhttp.status == 200) {
		// 			//response callback
		// 			processResponse(xhttp.responseText);
		// 		}
		// 	}
		// 	xhttp.open('GET', url, true);
		// 	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// 	xhttp.send();
		// }
		//merging two json objects before use
		function mergeJSON(dest, source, byField) {
			for(var j=0;j<cars.length;j++) {
				var tmp = cars[j][byField];
				for(var i=0;i<models.length;i++) {
					if(tmp == models[i][byField]) {
						for(prop in models[i]) {
							if(cars[j].hasOwnProperty(prop)) {}
							else {
								cars[j][prop] = models[i][prop];
							}
						}
					}
				}
			}
		}
		//printing out cars object
		function printCars(cars) {		
			resultMsg.innerHTML = "";
			if(result.length>0) {
				for(var j=0;j<cars.length;j++) {
					for(prop in cars[j]) {
						resultMsg.innerHTML += prop + ':' + cars[j][prop] + '<br>';
					}
					if(j!=cars.length-1) {
						resultMsg.innerHTML += '<hr>';
					}
				}
			}
			else if(result.length==0) {
				resultMsg.innerHTML = "No results were found meeting criteria";
			}
		}
		//filtering function, removes from result array those cars that do not meet given criteria
		function filter(filter) {
			switch(filter) {
				case "firstOwner": {
					if(getData.firstOwner == 'on') {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].owners != 1) {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "fuelType": {
					if(getData.fuelType == 'diesel') {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].fuelType != 'Diesel') {
								result.splice(x,1);
							}
						}
					}
					else if(getData.fuelType == 'petrol') {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].fuelType != 'Petrol') {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "priceMin": {
					if(getData.priceMin != "") {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].price<getData.priceMin) {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "priceMax": {
					if(getData.priceMax != "") {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].price>getData.priceMax) {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "engineSize": {
					if(getData.engineSize != 'all') {
					var eSMin = -1;
					var eSMax = -1;
						switch(getData.engineSize) {
							case "0": {
								eSMin=0;
								eSMax=999;
							} break;
							case "1": {
								eSMin=1000;
								eSMax=1399;
							} break;
							case "2": {
								eSMin=1400;
								eSMax=1699;
							} break;
							case "3": {
								eSMin=1700;
								eSMax=1999;
							} break;
							case "4": {
								eSMin=2000;
								eSMax=2999;
							} break;
							case "5": {
								eSMin=3000;
								eSMax=99999;
							} break;
						}
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].engineSize<eSMin || result[x].engineSize>eSMax) {
								result.splice(x,1);
							}
						}					
					}
				} break;
				case "transmission": {
					if(getData.transmission == "manual") {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].transmission!='Manual') {
								result.splice(x,1);
							}
						}
					}
					else if(getData.transmission == 'automatic') {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].transmission!='Automatic') {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "mileageMin": {
					if(getData.mileageMin != "") {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].mileage<getData.mileageMin) {
								result.splice(x,1);
							}
						}
					}
				} break;
				case "mileageMax": {
					if(getData.mileageMax != "") {
						for(var x=result.length-1;x>=0;x--) {
							if(result[x].mileage>getData.mileageMax) {
								result.splice(x,1);
							}
						}
					}
				} break;
				default: {
					alert("Unknown filter.");
				}
			}
			if(result == "") {
				resultMsg.innerHTML += "No results were found meeting criteria.";
			}
			return result;
		}
	 	function availableFilters() {
			var formElems = document.getElementsByTagName("form")[0].elements;
			if(formElems!=null) {
				for(var d=0;d<formElems.length;d++) {
					if(formElems[d].type == 'number' || formElems[d].type == 'select-one' || formElems[d].type == 'radio' ||
					formElems[d].type == 'checkbox' || formElems[d].type == 'text') {	
						filterSet.push(formElems[d].name);
					}
				}
			}
			else {
				alert("Couldn't find any form elements");
			}
			// make sure we have only unique values in a filters array
			filterSet = filterSet.filter(function(item, pos) {
	  			return filterSet.indexOf(item) == pos;
			});
			// console.log("number of filters after unique checking: " + filterSet.length);
		}
		function showFilters(filterSet) {
			if(filterSet.length!=0) {
				for(var c=0;c<filterSet.length;c++) {
					console.log('filterSet(' + c + ') :' + filterSet[c]);
				}
			}
			else {
				alert("no filters to show!");
			}
		}
		/*
			Checks if any filters were set and if so then apply filters 
		*/
		function filterCars(filterSet = null) {
			if(filterSet == null) {
				resultMsg.innerHTML = "No filters were passed";
			}
			else {
				for(var f=0;f<filterSet.length;f++) {
					if(filter(filterSet[f]) == "") {
						return 0;
					}
				}
			}
		}
		function prepareForm() {
			var form = document.getElementsByTagName('form')[0];
			if(form.addEventListener) {	//modern browsers
				form.addEventListener('submit', function(e) {
					// getRequest(form.getAttribute('action'));
					// run();
				}, false);	
			}
			else if(form.attachEvent) {	//old IE
				form.attachEvent('onsubmit', function(e) {
					// e.preventDefault();
					// getRequest('index.php');
					// run();
				});	
			}
		}
		function initialize() {
			//JSON objects that will be merged together and used as a source of cars
			mergeJSON(cars,models,"modelId");
			//create a 'copy' of cars object that can't be modified
			result = JSON.parse(JSON.stringify(cars));
			availableFilters();
			filterCars(filterSet);
		}
		//prepareForm() need to be always executed before 'run()'
		// prepareForm();
		initialize();
		function run() {
			printCars(result);
			console.log(result);
		}
		run();
	//---------- if the form has been submitted -------------------------------------------------------------------------------
	});
}());

