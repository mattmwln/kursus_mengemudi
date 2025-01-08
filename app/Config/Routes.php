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

// 🔑 Rute Login & Logout
$routes->get('/auth/login', 'Auth\AuthController::login');
$routes->post('/auth/login', 'Auth\AuthController::loginProcess');
$routes->get('/auth/logout', 'Auth\AuthController::logout');

// 🛡️ Rute Admin (Dengan Filter Auth)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    // 📊 Dashboard Admin
    $routes->get('/', 'AdminController::dashboard'); 
    $routes->get('dashboard', 'AdminController::dashboard'); 
    
    // 📚 Modul Courses
    $routes->get('courses', 'CourseController::index'); 
    $routes->get('courses/create', 'CourseController::create'); 
    $routes->post('courses/store', 'CourseController::store'); 
    $routes->get('courses/edit/(:num)', 'CourseController::edit/$1'); 
    $routes->post('courses/update/(:num)', 'CourseController::update/$1'); 
    $routes->get('courses/delete/(:num)', 'CourseController::delete/$1'); 


    $routes->get('instructors', 'InstructorController::index');
    $routes->get('instructors/create', 'InstructorController::create');
    $routes->post('instructors/store', 'InstructorController::store');
    $routes->get('instructors/edit/(:num)', 'InstructorController::edit/$1');
    $routes->post('instructors/update/(:num)', 'InstructorController::update/$1');
    $routes->get('instructors/delete/(:num)', 'InstructorController::delete/$1');


    $routes->get('schedules', 'ScheduleController::index');
    $routes->get('schedules/create', 'ScheduleController::create');
    $routes->post('schedules/store', 'ScheduleController::store');
    $routes->get('schedules/edit/(:num)', 'ScheduleController::edit/$1');
    $routes->post('schedules/update/(:num)', 'ScheduleController::update/$1');
    $routes->get('schedules/delete/(:num)', 'ScheduleController::delete/$1');
});
