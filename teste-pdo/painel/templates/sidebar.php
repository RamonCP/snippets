  <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="carros.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Carros</span></a>
        </li> 
        
        <li class="nav-item">
          <a class="nav-link" href="code/logout.php?id=<?= md5($_SESSION['id_user']) ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sair</span></a>
        </li>

       
        <!-- <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li> -->
      </ul>