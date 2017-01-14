<script type="text/javascript">

console.log(window.location);

var movieIDs = new Array();

movieIDs.push("tt0299977");
movieIDs.push("tt1319718");
movieIDs.push("tt2459022");
movieIDs.push("tt2599716");
movieIDs.push("tt6152908");
movieIDs.push("tt5290882");


movieIDs.forEach(function(movieID){
	var baseURL = "http://www.omdbapi.com/?i=";
	var url = baseURL + movieID;

	$.get(url,function(movieInfo){
		$movieImageUrl = movieInfo['Poster'];
		$movieTitle = movieInfo['Title'];
		$moviePlot = movieInfo['Plot'];
		$movieGenres = movieInfo['Genre'];

		var genresArray = $movieGenres.split(',');
		console.log(genresArray);

		$movieRating = movieInfo['Rated'];

		$spanElement = $('<span></span>');

		$titleElement = $('<p class="movie-title"></p>').text($movieTitle);
		$spanElement.append($titleElement);

		$plotElement = $('<p class="movie-plot"></p>');
		$plotElement.text($moviePlot);
		$spanElement.append($plotElement);

		$genreElement = $('<p></p>').text($movieGenres);
		$spanElement.append($genreElement);

		$ratingElement = $('<p></p>').text($movieRating);
		$spanElement.append($ratingElement);



		$imgElement = $('<img class="movie-img">');
		$imgElement.attr('width','300');
		$imgElement.attr('src', $movieImageUrl);

		$newMovie = $('<div class="movie-element col-xs-10 col-sm-7 offset-sm-2 offset-md-0 col-md-6 col-lg-4"></div>');
		$newMovie.append($spanElement);
		$newMovie.append($imgElement);
		$spanElement.hide();

		$button = $('<button class="btn btn-primary">Show Movie Info</button>');
		$($newMovie).append($button);

		$('#movie-container').append($newMovie);


		$('.movie-element button').click(function(){
				$(this).parent().find('img').hide();
				$(this).parent().find('span').fadeIn(2000);
				$(this).remove();
	
		});

	});

});

</script>
<!-- 

// var getJSONObject = function(movieID){

// 		var xhr = new XMLHttpRequest();
// 		var jsonObject = new Object();

// 		xhr.onreadystatechange = function(){
// 			if(xhr.readyState == 4){
// 				jsonObject = JSON.parse(xhr.responseText);
// 			}
// 		}

// 		var baseURL = "http://www.omdbapi.com/?i=";
// 		var url = baseURL + movieID;

// 		xhr.open('get', url);
// 		xhr.send();
// 	}

// var movieID = "tt0299977";
// var baseURL = "http://www.omdbapi.com/?i=";
// var url = baseURL + movieID;






// console.log(getJSONObject("tt0299977"));
// console.log(movieArray[0]);

// document.getElementById('jsonArray').innerHTML = JSON.stringify(movieArray[0]);


// movieArray.push(getJSONObject("tt0299977"));
// movieArray.push(getJSONObject("tt1319718"));
// movieArray.push(getJSONObject("tt2599716"));
// movieArray.push(getJSONObject("tt2459022"));

// document.getElementById('jsonArray').innerHTML = JSON.stringify(getJSONObject("tt0299977"));
// document.getElementById('jsonArray').innerHTML = JSON.stringify(movieArray);


	// var baseURL = "http://www.omdbapi.com/?i=";

	// var xhr = new XMLHttpRequest();

	// xhr.onreadystatechange = function() {
	// 	if(xhr.readyState == 4){
	// 		var response = JSON.parse(xhr.responseText);

	// 		var imgURL = response['Poster'];
			
	// 		document.getElementById('movie-plot-1').innerHTML = response['Plot'];
	// 		document.getElementById('movie-poster-1').setAttribute('src', imgURL);
	// 	}
	// };



	// 	var hero_MovieID = "tt0299977";
	// 	var url = baseURL+hero_MovieID;

	// 	xhr.open('GET',url);
	// 	xhr.send();
		


	// 	var xhr2 = new XMLHttpRequest();

	// 	xhr2.onreadystatechange = function(){
	// 		if(xhr2.readyState == 4){
	// 			var jsonObject = JSON.parse(xhr2.responseText);

	// 			movieImageUrl = jsonObject['Poster'];
	// 			moviePlotText = jsonObject['Plot'];

	// 			document.getElementById('movie-plot-2').innerHTML = moviePlotText;
	// 			document.getElementById('movie-poster-2').setAttribute('src',movieImageUrl);
	// 		}
	// 	}
	// 	var url2 = baseURL +"tt1319718";
	// 	xhr2.open('get',url2);
	// 	xhr2.send();

	// 	var xhr3 = new XMLHttpRequest();

	// 	var url3 = baseURL + "tt2599716";

	// 	xhr3.onreadystatechange = function(){
	// 		if(xhr3.readyState == 4){
	// 			var jsonObject = JSON.parse(xhr3.responseText);

	// 			var movieImageUrl = jsonObject['Poster'];
	// 			var moviePlotText = jsonObject['Plot'];

	// 			document.getElementById('movie-poster-3').setAttribute('src',movieImageUrl);
	// 			document.getElementById('movie-plot-3').innerHTML = moviePlotText;

	// 		}
	// 	}

	// 	xhr3.open('get',url3);
	// 	xhr3.send();

	// 	var xhr4 = new XMLHttpRequest();

	// 	xhr4.onreadystatechange = function(){
	// 		if(xhr4.readyState == 4){
	// 			var jsonObject = JSON.parse(xhr4.responseText);

	// 			document.getElementById('movie-poster-4').setAttribute('src', jsonObject['Poster']);
	// 			document.getElementById('movie-plot-4').innerHTML = jsonObject['Plot'];
	// 		}
	// 	}

	// 	var url4 = baseURL + "tt2459022";
	// 	xhr4.open('get',url4);
	// 	xhr4.send();
 -->
<!--  -->

