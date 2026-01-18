<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'session']);

$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
    $routes->get('', 'Admin\Dashboard::index');

    $routes->group('billboard', function ($routes) {
        $routes->get('', 'Admin\Billboard\Billboard::index');
        $routes->get('add', 'Admin\Billboard\Billboard::add');
        $routes->post('tabel', 'Admin\Billboard\Billboard::tabel');

        $routes->group('sewa', function ($routes) {
            $routes->get('', 'Admin\Billboard\BillboardSewa::index');
            $routes->get('add', 'Admin\Billboard\BillboardSewa::add');
            $routes->post('tabel', 'Admin\Billboard\BillboardSewa::tabel');
        });

        $routes->group('lahan', function ($routes) {
            $routes->get('', 'Admin\Billboard\BillboardLahan::index');
            $routes->get('add', 'Admin\Billboard\BillboardLahan::add');
            $routes->post('tabel', 'Admin\Billboard\BillboardLahan::tabel');
        });
    });
});

// $routes->group('lahan-billboard', ['namespace' => 'App\Controllers\Admin\BillboardLahan'], function ($routes) {
//     $routes->get('', 'Billboard::index');
//     $routes->get('add', 'Billboard::add');
//     $routes->post('tabel', 'Billboard::tabel');
// });

service('cirebonweb')->profil()->routes($routes, ['filter' => 'session']);
service('cirebonweb')->userList()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->userLogin()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->statistik()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->settingUmum()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->settingCache()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->settingOptimasi()->routes($routes, ['filter' => 'group:admin']);
service('cirebonweb')->log()->routes($routes, ['filter' => 'group:admin']);

service('auth')->routes($routes, ['except' => ['login', 'magic-link']]);
service('cirebonweb')->auth()->routes($routes);
