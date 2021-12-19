$(function(){
    $(".input_viaje4").hide(); 
    $(".p_oculto4").hide();  

    // UPDATE DE LOS DATOS DE LA TABLA
    $("#tabla4").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

            if (id){
                var id2 = id.split("_");
                var id3 = id2[1];               
                var id_oculto = $("#id_oculto4_"+id3).text();
                            
                $("#p4_"+id3).hide(); 
                $("#i4_"+id3).show();

                $("#i4_"+id3).on("blur", function(){
                    var input = $("#i4_"+id3).val(); 
                    $("#i4_"+id3).hide(); 
                                    
                    $("#p4_"+id3).text(input);
                    $("#p4_"+id3).show();      

                    var enlace="calls_js/update.php?input4="+input+"&id_oculto4="+id_oculto+"";
                    var enlace2= enlace.replace(/ /g, "_");
                    $("#resultado4").load(enlace2);

                });                                                        
            }       
    });
    // AÑADIR UN NUEVO CAMPO
    var i = 0;
    $("#añadir4").click(function(){
        i++;
        
        var usuario=$("#sesion_usuario").text();
        var fila = '<tr id="tr_e_nuevo4">'+ '<td><p id="p_nuevo4'+i+'"></p> <input id="input_nuevo4'+i+'" type="text"></td>' + '<td>' +usuario+ '</td>' + '<td> <button id="e_nuevo4" type="button" class="btn btn-danger">Eliminar</button> </td>' + '<tr>';
        $("#tabla4").append(fila);

    });
    // INSERTAR NUEVO CAMPO
    $("#tabla4").click(function(){
        var id_usuario=$("#sesion_idusuario").text();  
        var id_viaje=$("#sesion_idviaje").text();   
    
        $("#input_nuevo4"+i).on("blur", function(){
            var i_nuevo2 = $("#input_nuevo4"+i).val();
            $("#p_nuevo4"+i).text(i_nuevo2);
            $("#input_nuevo4"+i).hide();
            $("#p_nuevo4"+i).show();
            
            var enlace="calls_js/insert_general.php?input_nuevo="+i_nuevo2+"&id_viaje="+id_viaje+"&usuario_nuevo="+id_usuario+"";
            var enlace2= enlace.replace(/ /g, "_");
            $("#resultado").load(enlace2);
        });         
    });

    // ELIMINAR INPUTS
    $(".delete4").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id");

        if(id){
            var id2 = id.split("_");
            var id3 = id2[1];               
            var id_eliminar = $("#id_oculto4_"+id3).text();

            var enlace="calls_js/delete_inputs.php?input_delete="+id_eliminar+"";
            $("#resultado4").load(enlace);

            $("#eliminar4_"+id3+ "" ).remove();
        }
    });
    
    // ELIMINAR INPUTS NUEVOS
    $("#tabla4").click(function(event)  { 
        var target = $(event.target); 
        var id = target.attr("id"); 

        if(id=="e_nuevo4"){
            $("#tr_e_nuevo4").remove();
        }  
    }); 
}); 



