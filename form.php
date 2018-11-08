<?php

    if (isset($_POST['submit'])) {
        
        $nome = $_POST['nome'];
        $empresa = $_POST['empresa'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        
        $erroVazio = false;
        $erroEmail = false;
        
        $erroCampo = "Preencha todos os campos!";
        $erroEmail = "Introduza um email válido!";
        
        $sucessoMsg = "A sua mensagem foi enviada!";
        
        if (empty($nome) || empty($empresa) || empty($telefone) || empty($email) || empty($mensagem)) {
            
            echo "<script>alert('Preencha todos os campos!')</script>";
            $erroVazio = true;
            
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            echo "<script>alert('Introduza um email válido!')</script>";
            $erroEmail = true;
            
        } else {
            
            echo "<script>alert('A sua mensagem foi enviada!')</script>";
            
        }
        
    }

    else {
        
        echo "<script>alert('Ocorreu um erro. Por favor tente mais tarde')</script>";
        
    }

?>

<script>
    
    $("form").trigger('reset');
    
</script>
