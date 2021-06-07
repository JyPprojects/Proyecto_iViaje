// BEBIDA

$(function(){
    $(".input_viaje2").hide();   
    $(".p_oculto2").hide();  

    // UPDATE DE LOS DATOS DE LA TABLA
    $("#tabla2").click(function(event2)  { 
        var target2 = $(event2.target); 
        var id4 = target2.attr("id"); 

            if (id4){
                var id5 = id4.split("_");
                var id6 = id5[1]; 
                var id_oculto2 = $("#id_oculto2_"+id6).text();
                
                $("#p2_"+id6).hide(); 
                $("#i2_"+id6).show();

                $("#i2_"+id6).on("blur", function(){
                    var input2 = $("#i2_"+id6).val();
                    $("#i2_"+id6).hide(); 
                                    
                    $("#p2_"+id6).text(input2);
                    $("#p2_"+id6).show(); 
                    
                    var enlace2="calls_js/update.php?input2="+input2+"&id_oculto2="+id_oculto2+"";
                    var enlace3= enlace2.replace(/ /g, "_");
                    $("#resultado2").load(enlace3);
                });                                                        
            }       
    });
        // AÑADIR UN NUEVO CAMPO
    var i = 0;
    $("#añadir2").click(function(){ 
        i++;
        var usuario=$("#sesion_usuario").text();
        var fila = '<tr id="tr_e_nuevo2">'+ '<td><p id="p_nuevo'+i+'"></p> <input id="input_nuevo'+i+'" type="text"></td>' + '<td>' +usuario+ '</td>' + '<td> <button id="e_nuevo2" type="button" class="btn btn-danger">Eliminar</button> </td>' + '<tr>';
        $("#tabla2").append(fila);

    });
    // INSERTAR NUEVO CAMPO
    $("#tabla2").click(function(){
        var id_usuario=$("#sesion_idusuario").text();  
        var id_viaje=$("#sesion_idviaje").text();   
    
        $("#input_nuevo"+i).on("blur", function(){
            var i_nuevo2 = $("#input_nuevo"+i).val();
            $("#p_nuevo"+i).text(i_nuevo2);
            $("#input_nuevo"+i).hide();
            $("#p_nuevo"+i).show();
            
            var enlace="calls_js/insert_bebida.php?input_nuevo="+i_nuevo2+"&id_viaje="+id_viaje+"&usuario_nuevo="+id_usuario+"";
            var enlace2= enlace.replace(/ /g, "_");
            $("#resultado").load(enlace2);
        });
    });
    // ELIMINAR INPUTS
    $(".delete2").click(function(event)  { 
        var target = $(event.target); 
        var id4 = target.attr("id");

        if(id4){
            var id5 = id4.split("_");
            var id6 = id5[1];               
            var id_eliminar = $("#id_oculto2_"+id6).text();

            var enlace="calls_js/delete_inputs.php?input_delete="+id_eliminar+"";
            $("#resultado").load(enlace);

            $("#eliminar2_"+id6+ "" ).remove();
        }
    });  
    // ELIMINAR INPUTS NUEVOS
    $("#tabla2").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

        if(id=="e_nuevo2"){
            $("#tr_e_nuevo2").remove();
        }  
    });    
}); 