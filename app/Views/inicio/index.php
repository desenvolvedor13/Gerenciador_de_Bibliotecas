<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo!</h1>
        
        <!-- Mensagem de boas-vindas -->
        <div class="alert alert-success text-center">
            <h2>Olá, <?= session('nome'); ?>!</h2>
            <p>Seu papel no sistema é: <strong><?= session('role'); ?></strong>.</p>
        </div>
        
        <!-- Ações disponíveis -->
        <div class="text-center mt-4">
            <a href="<?= base_url('logout'); ?>" class="btn btn-danger">Sair</a>
            <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary">Ir para o Painel</a>
        </div>
    </div>
</body>
</html>
