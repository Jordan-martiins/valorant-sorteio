$("#btn-cadastro").click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "php/cadastrar.php",
        data: $("#form-cadastro").serialize(),
        dataType: "text",
        success: function (response) {
           
            $('#resultado').text(response);

        }
    });
    
});