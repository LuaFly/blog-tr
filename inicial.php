<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/inicial.css">
  <title>Tudo Roxo Blog</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php")?>
<?php include(ROOT_PATH . "/app/includes/messages.php")?>




  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- Posts Slider -->
    <div class="posts-slider">
      <h1 class="slider-title">Populares</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>
      <div class="posts-wrapper">
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_7.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, atque veniam voluptatibus minus natus ducimus velit molestiae quasi quibusdam autem! Esse vel dignissimos assumenda reiciendis ipsa nisi temporibus molestiae sequi.</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_6.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt sed eum numquam minus deserunt non quam, consequatur quasi illo molestiae. Vero eius harum quasi alias nemo voluptates rem sed explicabo.</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_5.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod harum magnam laudantium explicabo nihil porro, vitae fugit maxime molestias tempora magni necessitatibus natus, quo asperiores autem quis accusamus quasi animi!</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Awa Melvine
                  &nbsp;
                  <i class="fa fa-calendar"></i> Jan 18, 2019
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="assets/images/image_4.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod harum magnam laudantium explicabo nihil porro, vitae fugit maxime molestias tempora magni necessitatibus natus, quo asperiores autem quis accusamus quasi animi!</a></h4>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Posts Slider -->
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Posts Recentes</h1>
        <div class="post clearfix">
          <img src="assets/images/image_1.jpg" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">The strongest and sweetest songs yet remain to be sung</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_2.jpg" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">That love is all there is, is all we know of love</h2></a>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_3.jpg" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Do anything, but let it produce joy</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
        <!-- // Search -->
        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
           <ul>
           <?php foreach($topics as $key => $topic): ?>
            <a href="#">
              <li><?php echo $topic['name'];?></li>
            </a> 
            <?php endforeach; ?>

            


            
          </ul>
        </div> 
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->
  
  <?php include(ROOT_PATH . "/app/includes/footer.php")?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>