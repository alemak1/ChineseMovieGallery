	<script type="text/javascript">
		var $select = $('<select class="form-control form-control-lg"></select>');
		 
		$('#my-navbar-container').append($select);



		$('#my-navbar a').each(function(){
			var $option = $('<option></option>');
			$option.text($(this).text());
			$option.val($(this).attr('href'));
			$select.append($option);
		});



	</script>


	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>