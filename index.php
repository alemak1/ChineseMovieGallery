
<?php

include('inc/header.php');

?>

<?php

include('inc/ajax_request1.php');


?>




	<div class="container-fluid">
		<div class ="row" id="movie-container">
			
		</div>
	</div>


<style type="text/css" media="screen">

	#movie-container{
		margin-top: 5em;
	}

	.movie-element{
		height: 35em;
		text-align: center;
    }

    .movie-element span{
		display:block;
		height:25em;
		border-radius: 10%;
		border-width: 2px;
		border-color: #053582;
		border-style: solid;
		background-color: #7badfc;
		padding: 10px;
    }

    .movie-title{
    	margin-top: 5em;
    }

  	.movie-element img{
		margin-bottom: 1em;
 	}

.movie-element button{
	display: inline-block;
	margin-top: 1em;

}

.movie-element img{
	margin-bottom: 1em;
}

.movie-element button{
	margin-top: 1em;
}

</style>



<?php

include('inc/footer.php');

?>
<!-- <div class="form-group" id="title-search">
	<label>Enter movie title: <input type="text" name="movie_title" value="" id="movie-title"> </label>
	<button type="submit" onclick="sendAjax()">Get Movie Info!</button>
</div> -->
	

<!-- 

	<div class="movie-info-box" id="movie-info-1">
		<img src="" alt=""  class="poster-img" id="movie-poster-1">
		<p id="movie-plot-1" class="plot-text"></p>
	</div>


	<div class="movie-info-box" id="movie-info-2">
		<img src="" alt="" class="poster-img" id="movie-poster-2">
		<p id="movie-plot-2" class="plot-text"></p>
	</div>

	<div class="movie-info-box" id="movie-info-3">
		<img src="" alt="" class="poster-img" id="movie-poster-3">
		<p id="movie-plot-3" class="plot-text"></p>
	</div>

	<div class="movie-info-box" id="movie-info-4">
		<img src="" alt="" class="poster-img" id="movie-poster-4">
		<p id="movie-plot-4" class="plot-text"></p>
	</div>


	<div class="movie-info-box" id="movie-info-5">
		<img src="" alt="" class="poster-img" id="movie-poster-5">
		<p id="movie-plot-5" class="plot-text"></p>
	</div>

	<div id="jsonArray">
		
	</div> -->

<!-- script type="text/javascript">
	

</script> -->



