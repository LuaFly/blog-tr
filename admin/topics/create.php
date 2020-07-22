<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/topics.php")?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <link rel="stylesheet" href="../../assets/css/inicial.css">
  <title>Admin - Create Topic</title>
</head>
<body>
  <!-- header -->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>
  <!-- // header -->
  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
    <!-- // Left Sidebar -->
    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        
        <a href="create.php" class="btn btn-sm">Adicionar Topico</a>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php")?>
        <a href="index.php" class="btn btn-sm">Gerenciar Topicos</a>
      
      </div>
      <div class="">
        <h2 style="text-align: center;">Criar Topico</h2>
        <form action="create.php" method="post">
          <div class="input-group">
            <label>Nome</label>
            <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Descrição</label>
            <textarea class="text-input" name="description" value="<?php echo $description ?>" id="description"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="add-topic" class="btn" >Save Topic</button>
          </div>
        </form>
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
  <!-- Custome Scripts -->
  <script src="../../assets/js/script.js"></script>
</body>
</html>