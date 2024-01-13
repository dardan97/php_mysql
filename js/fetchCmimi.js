
function selectCmimi(){
    
   var x = document.getElementById("cmimi").value;    


   $.ajax({
    url: "showCmimi.php",
    method: "POST",
    data: {
        id: x
    },
    success: function(data){
        $("#ans").html(data);
    }

   })

}