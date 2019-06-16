var startInterval;
var count = 1; 

function get_experience() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: "/get_experience",
		type: "post",
		data: { user_id: $("#user_id").val() },
		success: function(result){
			//console.log(result);
			$("#experience").text(result['user_experience']);
		}
	});	
};

function set_experience() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url: "/set_experience",
		type: "post",
		data: { user_id: $("#user_id").val() },
		success: function(result){
			//console.log(result);
		}
	});	
};

function timerFired () {
	if((count % 2)==0){
		get_experience();
	}
	else {
		set_experience();
	}
	count = count + 1;
}

$(document).ready(function() {

	$('#start_experience').click(function(e) 
	{
		clearInterval(startInterval);
		startInterval = setInterval(timerFired,1000);
	});

	$('#stop_experience').click(function(e) 
	{
		clearInterval(startInterval);
	});

});
