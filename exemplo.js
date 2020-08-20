
$(document).ready(function(){
    $("#new").css("color","red");

    $(function(){
        $("#lista > tbody").sortable({update : function(){
            var parametros = $(this).sortable("serialize");

            $.post("sortable.php",parametros,function(resultado){
                alert("O registro foi alterado com sucesso")
            })

        }})
    });
})