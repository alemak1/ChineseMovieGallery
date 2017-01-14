<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	
</head>


<body>

<nav class="navbar navbar-light navbar-fixed-top bg-info" id="my-navbar-container">
  <div class="nav navbar-nav" id="my-navbar">
    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="science_fiction.php">Science Fiction</a>
    <a class="nav-item nav-link" href="comedy.php">Comedy</a>
    <a class="nav-item nav-link" href="romance.php">Romance</a>
    <a class="nav-item nav-link" href="action.php">Action/Kung Fu</a>

  </div>
</nav>

<script>
	var $select = $('<select class="form-control form-control-lg"></select>');
	 
	$('#my-navbar').append($select);



	$('#my-navbar a').each(function(){
		var $option = $('<option></option>');
		$option.text($(this).text());
		$option.val($(this).attr('href'));
		$select.append($option);

	});


	$select.change(function(){
		alert("Hello");
	});

	

</script>
