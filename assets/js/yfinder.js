$(document).ready(function(){

	// $('#yfinder-content').load('cive.php');

	$('nav ul li#link a').click(function(e){
		e.preventDefault();
		var page = $(this).attr('href');
	$('#yfinder-content').load(page+'.php');
	return false;

	});
});


$(document).ready(function(e){
e.preventDefault();
	// $('#yfinder-content').load('cive.php');

	$('.row a').click(function(){
		var page = $(this).attr('href');
	$('#yfinder-content').load(page+'.php');
	return false;

	});
});

