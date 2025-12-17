<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>
</head>
<body>
    <h2>Novo contato recebido pelo site!</h2>
    <p><strong>Nome:</strong> {{ $dados['name-user'] }}</p>
    <p><strong>Email:</strong> {{ $dados['email-user'] }}</p>
    <p><strong>Mensagem:</strong> {{ $dados['mensagem-user'] }}</p>
</body>
</html>
