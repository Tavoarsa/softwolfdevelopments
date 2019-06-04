$("#provincia").change(function (event) {

	$.get("cantones/"+ event.target.value+"",function(response,provincia){

	$("#canton").empty();

	
	for(i=0;i<response.length;i++){
		$("#canton").append("<option value='"+response[i].idCanton+"'>"+response[i].nombreCanton+"</option>");
	}

	});
	// body...
});