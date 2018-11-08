$(document).ready(function () {

    // animação parallax
    
    $(function () {
        var documentEl = $(document),
            parallaxBg = $('div.parallax-bg,div.parallax-bg-1,div.parallax-bg-2,div.parallax-bg-3,div.parallax-bg-4');
        documentEl.on('scroll', function () {
            var currScrollPos = documentEl.scrollTop();
            parallaxBg.css('background-position', '0 ' + -currScrollPos / 10 + 'px');
        });
    });
    
    // validação de formulário
    
    $("form").submit(function(e) {
       
        e.preventDefault();
        var nome = $("#nome").val();
        var empresa = $("#empresa").val();
        var telefone = $("#telefone").val();
        var email = $("#email").val();
        var mensagem = $("#mensagem").val();
        var submit = $("#submitButton").val();
        $(".form-mensagem").load("form.php", {
            nome: nome,
            empresa: empresa,
            telefone: telefone,
            email: email,
            mensagem: mensagem,
            submit: submit,
        });
        
    });
    
});

