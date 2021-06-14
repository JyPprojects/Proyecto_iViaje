$(function(){
    $(".input_viaje").hide(); 
    $(".p_oculto").hide();  
    $("#sesion_usuario").hide();      
    $("#sesion_idusuario").hide();  
    $("#sesion_idviaje").hide();   

    // UPDATE DE LOS DATOS DE LA TABLA
    $("#tabla").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

            if (id){
                var id2 = id.split("_");
                var id3 = id2[1];               
                var id_oculto = $("#id_oculto_"+id3).text();
                            
                $("#p_"+id3).hide(); 
                $("#i_"+id3).show();

                $("#i_"+id3).on("blur", function(){
                    var input = $("#i_"+id3).val(); 
                    $("#i_"+id3).hide(); 
                                    
                    $("#p_"+id3).text(input);
                    $("#p_"+id3).show(); 
                    
                    var enlace="calls_js/update.php?input="+input+"&id_oculto="+id_oculto+"";
                    var enlace2= enlace.replace(/ /g, "_");
                    $("#resultado").load(enlace2);

                });                                                        
            }       
    });
    // AÑADIR UN NUEVO CAMPO
    var i = 0;
    $("#añadir").click(function(){
        i++;
        
        var usuario=$("#sesion_usuario").text();
        var fila = '<tr id="tr_e_nuevo" >'+ '<td><p id="p_nuevo'+i+'"></p> <input id="input_nuevo'+i+'" type="text"></td>' + '<td>' +usuario+ '</td>' + '<td> <button id="e_nuevo" type="button" class="btn btn-danger">Eliminar</button> </td>' + '<tr>';
        $("#tabla").append(fila);

    });
    // INSERTAR NUEVO CAMPO
    $("#tabla").click(function(){
        var id_usuario=$("#sesion_idusuario").text();  
        var id_viaje=$("#sesion_idviaje").text();   
    
        $("#input_nuevo"+i).on("blur", function(){
            var i_nuevo2 = $("#input_nuevo"+i).val();
            $("#p_nuevo"+i).text(i_nuevo2);
            $("#input_nuevo"+i).hide();
            $("#p_nuevo"+i).show();
            
            var enlace="calls_js/insert_comida.php?input_nuevo="+i_nuevo2+"&id_viaje="+id_viaje+"&usuario_nuevo="+id_usuario+"";
            var enlace2= enlace.replace(/ /g, "_");
            $("#resultado").load(enlace2);
        });         
    });

    // ELIMINAR INPUTS
    $(".delete").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id");

        if(id){
            var id2 = id.split("_");
            var id3 = id2[1];               
            var id_eliminar = $("#id_oculto_"+id3).text();

            var enlace="calls_js/delete_inputs.php?input_delete="+id_eliminar+"";
            $("#resultado").load(enlace);

            $("#eliminar_"+id3+ "" ).remove();
        }
    });     

    // ELIMINAR INPUTS NUEVOS
    $("#tabla").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

        if(id=="e_nuevo"){
            $("#tr_e_nuevo").remove();
        }  
    }); 
}); 




