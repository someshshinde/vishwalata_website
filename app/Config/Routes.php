<?php

use App\Controllers\BackendController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
;
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->set404Override('\App\Controllers\Home::error404');

$routes->get('/about','Home::about');
$routes->get('/contact','Home::contact');
$routes->post('/inquiry','Home::inquiry');

$routes->get('/director_message','Home::director_message');
$routes->get('/secretary_desk','Home::secretary_desk');
$routes->get('/principal_desk','Home::principal_desk');
$routes->get('/management_body','Home::management_body');
$routes->get('/administration_department',"Home::administration_department");

$routes->get('/vision_mission','Home::vision_mission');


$routes->get('/course_details/(:any)','Home::course/$1');

$routes->get('/events/(:any)','Home::events/$1');
$routes->get('/event_details/(:any)','Home::event/$1');

$routes->get('/news/(:any)','Home::newses/$1');
$routes->get('/news_details/(:any)','Home::news/$1');


$routes->get('/department/(:any)','Home::department/$1');
$routes->get('/department_details/(:any)','Home::department_details/$1');


//Admission
$routes->get('/admission/eligibility','AdmissionController::eligibility');
$routes->get('/admission/scholership','AdmissionController::scholership');
$routes->get('/admission/prospectus','AdmissionController::prospectus');



//naac
$routes->get('/naac/academic_calender','NaacController::acadamic_calender');
$routes->get("/naac/mou","NaacController::mou");
$routes->get('/naac/certifications','NaacController::certifications');
$routes->get('/naac/IIQA','NaacController::IIQA');
$routes->get('/naac/iqac','NaacController::iqac');
$routes->get('/naac/ssr','NaacController::ssr');
$routes->get('/naac/ssr_documents','NaacController::ssr_documents');
$routes->get('/naac/dvv_clarification','NaacController::dvv_clarification');
$routes->get('/naac/first_cycle_accreditation_details','NaacController::first_cycle_accreditation_details');
$routes->get('/naac/annual_quality_assurance_report','NaacController::annual_quality_assurance_report');
//vacs
$routes->get('/naac/vacs/academic_calender','NaacController::vacs_academic_calender');
$routes->get('/naac/vacs/startup_and_innovation_cell','NaacController::vacs_startup_and_innovation_cell');
$routes->get('/naac/vacs/year_wise_report','NaacController::vacs_year_wise_report');
$routes->get('/naac/vacs/year_wise_event_and_program','NaacController::vacs_year_wise_event_and_program');


//Backend admin
$routes->get('/admin','BackendController::index');
$routes->post('/admin/login','BackendController::login');
$routes->get('/admin/dashboard','BackendController::dashboard');
$routes->get('/admin/config','BackendController::config');
$routes->post('/admin/config/update','BackendController::config_update');
//department
$routes->get('/admin/department/add','BackendController::department_add');
$routes->post('/admin/department/add/new','BackendController::department_add');
$routes->get('/admin/department/view','BackendController::department_view');
$routes->get('/admin/department/edit/(:any)','BackendController::department_edit/$1');
$routes->post('/admin/department/edit/(:any)','BackendController::department_edit/$1');

//Courses
$routes->get('/admin/courses/add','BackendController::courses_add');
$routes->post('/admin/courses/add/new','BackendController::courses_add');
$routes->get('/admin/courses/view','BackendController::courses_view');
$routes->get('/admin/courses/edit/(:any)','BackendController::courses_edit/$1');
$routes->post('/admin/courses/edit/(:any)','BackendController::courses_edit/$1');

//Faculty
$routes->get('/admin/faculty/add','BackendController::faculty_add');
$routes->post('/admin/faculty/add/new','BackendController::faculty_add');
$routes->get('/admin/faculty/view','BackendController::faculty_view');
$routes->get('/admin/faculty/edit/(:any)','BackendController::faculty_edit/$1');
$routes->post('/admin/faculty/edit/(:any)','BackendController::faculty_edit/$1');

//Events
$routes->get('/admin/events/add','BackendController::events_add');
$routes->post('/admin/events/add/new','BackendController::events_add');
$routes->get('/admin/events/view','BackendController::events_view');
$routes->get('/admin/events/edit/(:any)','BackendController::events_edit/$1');
$routes->post('/admin/events/edit/(:any)','BackendController::events_edit/$1');

//News
$routes->get('/admin/news/add','BackendController::news_add');
$routes->post('/admin/news/add/new','BackendController::news_add');
$routes->get('/admin/news/view','BackendController::news_view');
$routes->get('/admin/news/edit/(:any)','BackendController::news_edit/$1');
$routes->post('/admin/news/edit/(:any)','BackendController:news_edit/$1');

//achivement
$routes->get('/admin/achivement/add','BackendController::achivement_add');
$routes->post('/admin/achivement/add/new','BackendController::achivement_add');
$routes->get('/admin/achivement/view','BackendController::achivement_view');
$routes->get('/admin/achivement/edit/(:any)','BackendController::achivement_edit/$1');
$routes->post('/admin/achivement/edit/(:any)','BackendController:achivement_edit/$1');
//logout
$routes->get('/admin/logout','BackendController::logout');