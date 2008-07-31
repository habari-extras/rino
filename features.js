$(document).ready(function() {
	$('#featurenav li a').click(function() {
		var target= $(this).attr('href');
		
		$('#featurenav li').removeClass('active');
		$('#featureset li').removeClass('active');
		
		$(this).parent().addClass('active');
		$(target).addClass('active');
	});
	
	$('#featurenav li').removeClass('active');
	$('#featureset li').removeClass('active');
	
	if($('#featureset li:visible').length != 0) {
		var target= $('#featureset li:visible').attr('id');
		var link= $('#featurenav li a[href=#' + target + ']');
		
		link.click();
		
	} else {
		$('#featurenav li a').eq(0).click();
	}
})