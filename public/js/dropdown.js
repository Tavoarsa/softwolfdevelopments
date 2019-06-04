$("#finca").change(function (event) {
	$.get("equipos/"+ event.target.value+"",function(response,finca){
	$("#equipo").empty();
	for(i=0;i<response.length;i++){
		$("#equipo").append("<option value='"+response[i].id+"'>"+response[i].nombreE+"</option>");
	}

	});
	// body...
});