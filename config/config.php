<?php
define('BASE_URL', 'https://ypms.kesug.com/ypms/');
define('ASSETS_URL', BASE_URL . '/assets');

// Initialize managers
$assets = new AssetManager();
$page = new PageManager();

// Load core assets based on page requirements
function loadCoreAssets($assets, $page_type = 'basic')
{
    // Core CSS - always loaded
    $assets->addCSS('assets/css/fonts.min.css', 1);
    $assets->addCSS('assets/css/font-awesome.min.css', 2);
    $assets->addCSS('assets/css/core.min.css', 3);
    $assets->addCSS('assets/css/style.min.css', 4);

    // Core JS - always loaded
    $assets->addJS('assets/js/core.min.js', 1);
    $assets->addJS('assets/js/script.min.js', 2);
    $assets->addJS('assets/js/process.min.js', 3);
    $assets->addJS('assets/js/layout-settings.min.js', 4);

    include 'custom_script/page_load_time.php';

    // Conditional loading based on page type
    switch ($page_type) {
        case 'dashboard':
            // $assets->addCSS('assets/css/plugins.min.css', 3);
            // $assets->addJS('assets/js/chart.min.js', 5);
            // $assets->addJS('assets/js/jquery.sparkline.min.js', 6);
            // $assets->addJS('assets/js/circles.min.js', 7);
            break;

        case 'table':
            // $assets->addCSS('assets/css/plugins.min.css', 3);
            // $assets->addJS('assets/js/datatables.min.js', 5);
            // $assets->addJS('assets/js/sweetalert.min.js', 6);
            break;

        case 'form':
            // $assets->addCSS('assets/css/select2.min.css', 3);
            // $assets->addCSS('assets/css/toastr.min.css', 4);
            // $assets->addJS('assets/js/select2.min.js', 5);
            // $assets->addJS('assets/js/sweetalert.min.js', 6);
            // $assets->addJS('assets/js/toastr.min.js', 7);
            break;

        case 'notifications':
            // $assets->addCSS('assets/css/toastr.min.css', 3);
            // $assets->addJS('assets/js/toastr.min.js', 5);
            // $assets->addJS('assets/js/bootstrap-notify.min.js', 6);
            break;

        case 'login':
            $assets->addJS('assets/js/moment.min.js', 5);
            include 'custom_script/datetime.php';
            break;
    }
}
