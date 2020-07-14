  <header class="clearfix">
    <div class="logo">
      <a href="inicial.php">
        <h1 class="logo-text"><span>Tudo </span>Roxo</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL . '/inicial.php'?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        
        <?php if(isset($_SESSION['id'])): ?>

        <li>
        <a href="#">
        <i class="fa fa-user"> </i>
         <?php echo $_SESSION['username']; ?>
        <i class="fa fa-chevron-down" style="font-size: .8em"></i>
        </a>
        <ul class="dropdown"> 
        <?php if($_SESSION['admin']):?>
          <li> <a href="<?php echo BASE_URL . '/admin/dashboard.php'?>"> Dashboard </a></li>
        <?php endif;?>
          <li> <a href="<?php echo BASE_URL . '/logout.php'?>" class="logout"> Sair </a> </li>
        </ul>
        </li>
      
        <?php else:?>
          <li> <a href="<?php echo BASE_URL . '/register.php'?>"> Cadastrar </a></li>
        <li> <a href="<?php echo BASE_URL . '/login.php'?>"> Entrar </a></li>
        <?php endif;?>
      </ul>
    </nav>
  </header>