<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png">
  </head>
  <body>
    <div class="container-scroller">
      <!-- Début Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper">
          <a class="sidebar-brand brand-logo" href="/redirect">
            <img src="/assets/images/logo.svg" alt="Logo Admin">
          </a>
        </div>

        <!-- Section Profil -->
        <div class="profile-desc">
          <img class="img-xs rounded-circle" src="/assets/images/faces/face15.jpg" alt="Profile">
          <h5 class="mb-0">Henry Klein</h5>
        </div>

        <!-- Menu Navigation -->
        <ul class="nav">
          <!-- Élément Dashboard -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="/redirect">
              <i class="mdi mdi-speedometer"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!-- ... Autres éléments du menu ... -->

          <!-- Nouvel élément Déconnexion -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="/logout.php">
              <i class="mdi mdi-logout text-danger"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Fin Sidebar -->

      <!-- Contenu Principal -->
      <div class="container-fluid page-body-wrapper">
        <!-- Barre de navigation supérieure -->
        <nav class="navbar p-0 fixed-top">
          <img src="/assets/images/logo-mini.svg" alt="Mini Logo" class="navbar-brand-mini">
          <!-- ... Éléments de la navbar ... -->
        </nav>

        <!-- Panel Principal -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Contenu du Dashboard -->
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tableau de bord</h4>
                    <!-- Contenu spécifique -->
                    <img src="/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img" alt="Graphique">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/dashboard.js"></script>
  </body>
</html>