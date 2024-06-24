$(document).ready(function() {

setInterval(Checar,3000);

function Checar() {
    $.ajax({
        url:'request.php',
        success: function (data) {
        $("#Requests").html(data);            
        }
    });
}
    
  
  

    
});


//função jquery para fazer a request do arquivo php, e exibir na div $requests.