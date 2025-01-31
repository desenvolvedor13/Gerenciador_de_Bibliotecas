<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema Gerenciador de Bibliotecas</title>
<script defer src="../../assets/js/bundle.js"></script></head>
<body>
  <!-- Passando o base_url para o JS -->
  <script>
    const baseURL = "<?= base_url(); ?>";  // CodeIgniter 4 base_url
  </script>

  <!-- Ponto de ancoragem para o React -->
  <div id="root"></div>

  <!-- Carregando o bundle do React -->
  <script src="<?= base_url('assets/js/bundle.js'); ?>"></script>
</body>
</html>
