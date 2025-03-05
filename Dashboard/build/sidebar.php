<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../Homepage/img/Cendekia Primary Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cendekia AC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="profile/<?= $pp?>.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$nama?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index3.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Overview</p>
            </a>
          </li>

          <!-- Main Menu dengan Dropdown -->
           <?php if($tes=="yes") : ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Main menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tugas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="materi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Materi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mentoring.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mentoring</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="project.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="chatuser.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Chat menu</p>
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a href="edubot.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>EduBot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="test.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Test</p>
            </a>
          </li>
        </ul>
      </nav>
      <div class="sidebar-footer">
        <a href="logout.php" class="btn btn-danger d-flex align-items-center justify-content-between w-100">
          <span>Logout</span>
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>
      <!-- /.sidebar-menu -->
    </div>
</aside>
