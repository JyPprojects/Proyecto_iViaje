// PARTICIPANTES
function clickButton(){
   //var error="";
   var name=document.getElementById('name').value;
   var error=$('#msg').html();
   console.log(error);
   // setTimeout(function() {
   //     error=$('#msg').html();
   // }, 10);
   
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
   
   if(error=""){
      $("#part").append("<span>"+name+"</span><br>");
   }
   else{
     
   }
   
   console.log(name);

   return false;


}
