


var $select = $('<select class="form-control form-control-lg"></select>');
 
$('#my-navbar').append($select);



$('#my-navbar a').each(function(){
	var $option = $('<option></option>');
	$option.text($(this).text());
	$option.val($(this).attr('href'));
	$select.append($option);

});

$select.children().each(function(){
	console.log("hello" + $(this).val());
});