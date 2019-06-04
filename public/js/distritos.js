$("#canton").change(function (event) {
	$.get("distritos/"+ event.target.value+"",function(response,canton){
	$("#distrito").empty();
	for(i=0;i<response.length;i++){
		
		$("#distrito").append("<option value='"+response[i].idDistrito+"'>"+response[i].nombreDistrito+"</option>");
	}

	});
	// body...
});