<?php
session_start();

// Vérification de l'authentification
if (!isset($_SESSION['user']) {
    header('Location: login.html');
    exit();
}

// Vérification du rôle admin
if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: login.html?error=permission');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container-scroller">
        <!-- Sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper">
                <a class="sidebar-brand brand-logo" href="redirect.php">
                    <img src="/assets/images/logo.svg" alt="Admin Dashboard">
                </a>
            </div>
            
            <!-- Profil Admin -->
            <div class="profile-desc">
                <img class="img-xs rounded-circle" src="/assets/images/faces/face15.jpg" alt="profile">
                <h5 class="mb-0"><?= htmlspecialchars($_SESSION['user']['email']) ?></h5>
            </div>

            <!-- Menu -->
            <ul class="nav">
                <li class="nav-item menu-items">
                    <a class="nav-link" href="redirect.php">
                        <i class="mdi mdi-speedometer"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <!-- Ajouter d'autres éléments de menu ici -->
            </ul>
        </nav>

        <!-- Contenu principal -->
        <div class="container-fluid page-body-wrapper">
            <!-- Navbar -->
            <nav class="navbar p-0 fixed-top">
                <div class="navbar-menu-wrapper">
                    <!-- ... éléments de la navbar ... -->
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#">
                                <div class="navbar-profile">
                                    <p class="mb-0 navbar-profile-name"><?= htmlspecialchars($_SESSION['user']['email']) ?></p>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="logout.php">
                                    <i class="mdi mdi-logout text-danger"></i> Déconnexion
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenu du dashboard -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Section Statistiques -->
                    <div class="row">
                        <div class="col-md-3 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Utilisateurs</h4>
                                    <h2 class="text-primary">1,234</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Ajouter d'autres statistiques -->
                    </div>

                    <!-- Section Tableau -->
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Activités récentes</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Utilisateur</th>
                                                    <th>Action</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Données dynamiques à ajouter -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center">
                        <span class="text-muted">Système Admin © 2024</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/js/off-canvas.js"></script>
    <script>
        // Gestion de la déconnexion
        document.querySelectorAll('.logout-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                window.location.href = 'logout.php';
            });
        });
    </script>
</body>
</html>