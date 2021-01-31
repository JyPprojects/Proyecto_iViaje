    // BEBIDA

    $(function(){
        $(".input_viaje2").hide();   
        

        // COMO AQUI TENGO PUESTO DOCUMENT CUALQUIER CLIC QUE HAGA EN TODO EL DOCUMENTO DESENCADENARA EL EVENTO. (HAY QUE CAMBIARLO)
       $("#tabla2").click(function(event2)  { 
            var target2 = $(event2.target); 
            var id4 = target2.attr("id"); 

                if (id4){
                    var id5 = id4.split("_");
                    var id6 = id5[1];
                    var input2 = $("#i2_"+id6).val(); 
                    //var usuario = $("#u2_"+id6).text();

                    
                             
                    $("#p2_"+id6).hide(); 
                    $("#i2_"+id6).show();

                    $("#i2_"+id6).on("blur", function(){
                        $("#i2_"+id6).hide(); 
                                        
                        $("#p2_"+id6).text(input2);
                        $("#p2_"+id6).show(); 
                        

                        //var enlace="update.php?input="+input+"&usuario="+usuario+" ";
                        //$("#resultado").load(enlace);
                    });                                                        
                }       
        });
        var i = 0;
        $("#añadir2").click(function(){
            
            i++;
            var prueba1 = '<tr>'+ '<td><p id="p_nuevo2'+i+'"></p> <input id="input_nuevo2'+i+'" type="text"></td>' + '<td> </td>' + '<tr>';
            $("#p_nuevo2").hide();
            $("#tabla2").append(prueba1);

        });
        $(document).click(function(){
            var i_nuevo = $("#input_nuevo2"+i).val();
        
            $("#input_nuevo2"+i).on("change", function(){
                $("#p_nuevo2"+i).text(i_nuevo);
                $("#input_nuevo2"+i).hide();
                $("#p_nuevo2"+i).show();


                //var usuario2="pablo";
                //var enlace="insert.php?input_nuevo="+i_nuevo+"&usuario_nuevo="+usuario2+" ";
                //$("#resultado2").load(enlace);
            });         
        });
    }); 