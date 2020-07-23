<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
?>
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
        <a href="create.php" class="btn btn-sm">Add Post</a>
        <a href="index.php" class="btn btn-sm">Manage Posts</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Manage Posts</h2>
        <?php include(ROOT_PATH . "/app/includes/messages.php")?>
        <table>
          <thead>
            <th>N</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
          <?php foreach($posts as $key => $post): ?>
            <tr>
              <td> <?php echo $key +1; ?></td>
              <td>
                <?php echo $post['title']?>
              </td>
              <td>Awa</td>
              <td>
                <a href="edit.php" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Delete
                </a>
              </td>
              <td>
              <?php if($post['published']):?>
              
                <a href="#" class="unpublish">
                  unpublish
                </a>
              </td>
              <?php else: ?>
              <a href="#" class="publish">
                  Publish
                </a>
              <?php endif; ?>
            </tr>
          <?php endforeach;?>
            
           
          </tbody>
        </table>
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