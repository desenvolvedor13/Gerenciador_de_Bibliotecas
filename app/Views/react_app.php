<!-- No seu arquivo PHP ou View -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema Gerenciador de Bibliotecas</title>
</head>
<body>
  <!-- Passando o base_url diretamente para o JavaScript -->
  <script>
    const baseURL = "<?= base_url(); ?>";  // CodeIgniter 4 base_url
  </script>

  <div id="root"></div>

  <script src="<?= base_url('assets/js/bundle.js'); ?>"></script>
</body>
</html>
