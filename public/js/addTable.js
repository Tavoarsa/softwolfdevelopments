   $(document).ready(function(){

    $("#total_orden").focus(function(){
        var costo_servicio= $("#costo_servicio").val();
        var costo_kilometraje= $("#costo_kilometraje").val();


        var total=0;

        var total= parseFloat(costo_servicio) + parseFloat(costo_kilometraje);

        $("#total_orden").val(total);


    });

     
       var cntrol=$(this);

        $(".add-row").click(function(){
          
            var precio = cntrol.find(':selected').data('precio');
            var nombre = $("#nombre").val();
          
            
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + nombre + "</td><td>" + precio + "</td></tr>";

            $("table tbody").append(markup);
        });


        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
              if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    