// PARTICIPANTES
function clickButton(){

   var name=document.getElementById('name').value;
   
   $.ajax({
         type:"post",
         url:"participantes.php",
         data: 
         {  
            'name' :name
         },
         cache:false,
         success: function (html) 
         {
            $('#msg').html(html);
         }
   });

   return false;

}

$(function(){

$("#enviar").on("click", function(){
   $("#part").remove();
});

});
