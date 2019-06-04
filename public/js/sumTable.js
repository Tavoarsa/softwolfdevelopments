$(document).ready(function(){

$(".add-row").click(function(){

    var total=0;
    $('#insumos_table tbody').find('tr').each(function(i,el){

        total+= parseFloat($(this).find('td').eq(2).text());
        
    });

    $('#insumos_table tfoot tr th').eq(2).text("Total: "+ total);
  });

  // Find and remove selected table rows
        $(".delete-row").click(function(){

        var total=0;

        $('#insumos_table tbody').find('tr').each(function(i,el){

        total-= parseFloat($(this).find('td').eq(2).text());

        
    });
        $('#insumos_table tfoot tr th').eq(2).text("Total: "+ total);
        });
});    