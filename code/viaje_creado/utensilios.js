$(function(){
    $(".input_viaje3").hide(); 
    $(".p_oculto3").hide();  

    // UPDATE DE LOS DATOS DE LA TABLA
    $("#tabla3").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

            if (id){
                var id2 = id.split("_");
                var id3 = id2[1];               
                var id_oculto = $("#id_oculto3_"+id3).text();
                            
                $("#p3_"+id3).hide(); 
                $("#i3_"+id3).show();

                $("#i3_"+id3).on("blur", function(){
                    var input = $("#i3_"+id3).val(); 
                    $("#i3_"+id3).hide(); 
                                    
                    $("#p3_"+id3).text(input);
                    $("#p3_"+id3).show(); 
                    
                    var enlace="calls_js/update.php?input3="+input+"&id_oculto3="+id_oculto+"";
                    var enlace2= enlace.replace(/ /g, "_");
                    $("#resultado3").load(enlace2);
                });                                                        
            }       
    });
    // AÑADIR UN NUEVO CAMPO
    var i = 0;
    $("#añadir3").click(function(){
        i++;
        
        var usuario=$("#sesion_usuario").text();
        var fila = '<tr id="tr_e_nuevo3">'+ '<td><p id="p_nuevo3'+i+'"></p> <input id="input_nuevo3'+i+'" type="text"></td>' + '<td>' +usuario+ '</td>' + '<td> <button id="e_nuevo3" type="button" class="btn btn-danger">Eliminar</button> </td>' + '<tr>';
        $("#tabla3").append(fila);

    });
    // INSERTAR NUEVO CAMPO
    $("#tabla3").click(function(){
        var id_usuario=$("#sesion_idusuario").text();  
        var id_viaje=$("#sesion_idviaje").text();   
    
        $("#input_nuevo3"+i).on("blur", function(){
            var i_nuevo2 = $("#input_nuevo3"+i).val();
            $("#p_nuevo3"+i).text(i_nuevo2);
            $("#input_nuevo3"+i).hide();
            $("#p_nuevo3"+i).show();
            
            var enlace="calls_js/insert_utensilios.php?input_nuevo="+i_nuevo2+"&id_viaje="+id_viaje+"&usuario_nuevo="+id_usuario+"";
            var enlace2= enlace.replace(/ /g, "_");
            $("#resultado").load(enlace2);
        });         
    });

    // ELIMINAR INPUTS
    $(".delete3").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id");

        if(id){
            var id2 = id.split("_");
            var id3 = id2[1];               
            var id_eliminar = $("#id_oculto3_"+id3).text();

            var enlace="calls_js/delete_inputs.php?input_delete="+id_eliminar+"";
            $("#resultado3").load(enlace);

            $("#eliminar3_"+id3+ "" ).remove();
        }
    }); 

    // ELIMINAR INPUTS NUEVOS
    $("#tabla3").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

        if(id=="e_nuevo3"){
            $("#tr_e_nuevo3").remove();
        }  
    }); 
}); 