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
        <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="admin/posts/inicial.php">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>