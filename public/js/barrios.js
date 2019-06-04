$("#distrito").change(function (event) {
	$.get("barrios/"+ event.target.value+"",function(response,distrito){
	$("#barrio").empty();
	for(i=0;i<response.length;i++){
		$("#barrio").append("<option value='"+response[i].idBarrio+"'>"+response[i].nombreBarrio+"</option>");
	}

	});
	// body...
});