<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// 🏠 Rute Halaman Utama
$routes->get('/', 'Home::index');

// Checkout
$routes->post('checkout', 'User\CheckoutController::checkout');
$routes->get('checkout-page/(:num)', 'User\CheckoutController::viewCheckout/$1');
$routes->post('checkout-page/(:num)', 'User\CheckoutController::uploadPayment/$1');


// 🔑 Rute Login & Logout
$routes->get('/auth/login', 'Auth\AuthController::login');
$routes->post('/auth/login', 'Auth\AuthController::loginProcess');
$routes->get('/auth/logout', 'Auth\AuthController::logout');

// 🛡️ Rute Admin (Dengan Filter Auth)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    // 📊 Dashboard Admin
    $routes->get('/', 'Admin\AdminController::dashboard'); 
    $routes->get('dashboard', 'Admin\AdminController::dashboard'); 
    
    // 📚 Modul Courses
    $routes->get('courses', 'Admin\CourseController::index'); 
    $routes->get('courses/create', 'Admin\CourseController::create'); 
    $routes->post('courses/store', 'Admin\CourseController::store'); 
    $routes->get('courses/edit/(:num)', 'Admin\CourseController::edit/$1'); 
    $routes->post('courses/update/(:num)', 'Admin\CourseController::update/$1'); 
    $routes->get('courses/delete/(:num)', 'Admin\CourseController::delete/$1'); 
    $routes->post('courses/bulk-delete', 'Admin\CourseController::bulkDelete');




    $routes->get('instructors', 'Admin\InstructorController::index');
    $routes->get('instructors/create', 'Admin\InstructorController::create');
    $routes->post('instructors/store', 'Admin\InstructorController::store');
    $routes->get('instructors/edit/(:num)', 'Admin\InstructorController::edit/$1');
    $routes->post('instructors/update/(:num)', 'Admin\InstructorController::update/$1');
    $routes->get('instructors/delete/(:num)', 'Admin\InstructorController::delete/$1');
    $routes->post('instructors/bulk-delete', 'Admin\InstructorController::bulkDelete');



    $routes->get('schedules', 'Admin\ScheduleController::index');
    $routes->get('schedules/create', 'Admin\ScheduleController::create');
    $routes->post('schedules/store', 'Admin\ScheduleController::store');
    $routes->get('schedules/edit/(:num)', 'Admin\ScheduleController::edit/$1');
    $routes->post('schedules/update/(:num)', 'Admin\ScheduleController::update/$1');
    $routes->get('schedules/delete/(:num)', 'Admin\ScheduleController::delete/$1');
    $routes->post('schedules/bulk-delete', 'Admin\ScheduleController::bulkDelete');


    $routes->get('register', 'Admin\RegisterController::index');
    $routes->get('uploads/payment_images/(:segment)', 'Admin\RegisterController::getImage/$1');
    $routes->post('register/update-status/(:num)', 'Admin\RegisterController::updateStatus/$1');
    $routes->get('register/download-pdf', 'Admin\RegisterController::exportToPdf');
    $routes->get('register/delete/(:num)', 'Admin\RegisterController::delete/$1');
    // $routes->get('register/create', 'Admin\ScheduleController::create');
    // $routes->post('register/store', 'Admin\ScheduleController::store');
    // $routes->get('register/edit/(:num)', 'Admin\ScheduleController::edit/$1');
    // $routes->post('register/update/(:num)', 'Admin\ScheduleController::update/$1');
    // $routes->get('register/delete/(:num)', 'Admin\ScheduleController::delete/$1');
});

