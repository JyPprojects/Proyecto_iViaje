$(document).ready(function(event){
    var current = 1,current_step,next_step,steps; 
    steps = $("fieldset").length;

        $("#siguiente1").click(function(){
            var nviaje=$("#nviaje").val();
            var pais=$("#pais").val();
            var bote=$("#bote").val();
            var fecha_ini=$("#fecha_ini").val();
            var fecha_fin=$("#fecha_fin").val();
        
            if(nviaje && pais && bote && fecha_ini && fecha_fin){
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            }
                
            else{
                alertify.error('Tienes que rellenar todos los campos');
            }
                    
        });
        $("#siguiente2").click(function(){
            var transporte=$("#transporte").val();
            var c_coches=$("#c_coches").val();
            var combustible=$("#combustible").val();

            $(document).on("click", function(event){
                var target = $(event.target);
                var id = target.attr("id");
                var value = $("#"+id).val();
                
                if(value=="Avión"){
                    $(".combustible2").hide();
                    $(".cantidad").hide();
                }
                else if(value=="Coche"){
                    $(".combustible2").show();
                    $(".cantidad").show();
        
                }
            });
        

            if(c_coches && transporte && combustible){
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            }
            else{
                alertify.error('Tienes que rellenar todos los campos');
            }

        });
        $("#siguiente3").click(function(){
            var estancia=$("#estancia").val();
            var direccion=$("#direccion").val();
            var tlf_estancia=$("#tlf_estancia").val();

            if(estancia && direccion && tlf_estancia){
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            }
            else{
                alertify.error('Tienes que rellenar todos los campos');
            }

        });

        $(".previous").click(function(){
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
            setProgressBar(--current);
        });
    setProgressBar(current);
    
// Barra de progresión.
    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
        .css("width",percent+"%")
        .html(percent+"%");
        }

        
// Cambios en la pestaña transporte
    $(document).on("click", function(event){
        var target = $(event.target);
        var id = target.attr("id");
        var value = $("#"+id).val();

        if(value=="Avión"){
            $(".combustible2").hide();
            $(".cantidad").hide();
        }
        else if(value=="Coche"){
            $(".combustible2").show();
            $(".cantidad").show();

        }
    });
});
