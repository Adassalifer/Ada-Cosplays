<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    $to = 'loja@adacosplays.com';
    $nome = $_POST['nome'];
    $from = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $headers = "From: $nome <$from>";
    mail($to, 'Mensagem de Contato', $mensagem, $headers);
    header('Location: index.html?enviado=true');
} else {
    header('Location: index.html?enviado=false');
}
?>