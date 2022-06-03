<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMII Bumiayu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url('css') ?>/portal.css">
    <link rel="stylesheet" href="<?= base_url('css') ?>/style.css">
</head>

<body class="app">
    <!--//app-header-->
    <header class="app-header fixed-top">
        <!-- Navbar -->
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <?= view($config->viewLayout['bootstrap5'] . 'navbar') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <!-- Sidebar -->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="<?= route_to('dashboard') ?>"><img height="32"
                            src="<?= base_url('img') ?>/Logo.png" alt="logo"><span class="logo-text"> PORTAL</span></a>
                </div>
                <!-- Top Sidebar -->
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <?= view($config->viewLayout['bootstrap5'] . 'sidebar-top') ?>
                    </ul>
                </nav>
                <!-- Top Sidebar -->
                <!-- Bottom Sidebar -->
                <div class="app-sidepanel-footer">
                    <nav class="app-nav app-nav-footer">
                        <ul class="app-menu footer-menu list-unstyled">
                            <?= view($config->viewLayout['bootstrap5'] . 'sidebar-bottom') ?>
                        </ul>
                    </nav>
                </div>
                <!-- Bottom Sidebar -->
            </div>
        </div>
        <!-- Sidebar -->
    </header>
    <!--//app-header-->
    <!-- App main -->
    <div class="app-wrapper">
        <!-- Content -->
        <main role="main">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">
                    <?= $this->renderSection('main') ?>
                </div>
                <!--//container-fluid-->
            </div>
        </main>
        <!-- Content -->
        <!-- Footer -->
        <footer class="app-footer">
            <?php
            // echo view($config->viewLayout['bootstrap5'].'footer');
            ?>
        </footer>
        <!-- Footer -->
    </div>
    <!-- App main -->

    <script>
    const base_url = `<?= base_url() ?>`;
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"
        integrity="sha256-cHVO4dqZfamRhWD7s4iXyaXWVK10odD+qp4xidFzqTI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"
        integrity="sha256-RhRrbx+dLJ7yhikmlbEyQjEaFMSutv6AzLv3m6mQ6PQ=" crossorigin="anonymous"></script>
    <script src="<?= base_url('js') ?>/app.js"></script>
    <script src="<?= base_url('js') ?>/panel.js"></script>
</body>

</html>