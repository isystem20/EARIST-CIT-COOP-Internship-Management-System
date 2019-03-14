<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MainController';
// $route['404_override'] = 'ErrorController';
$route['translate_uri_dashes'] = FALSE;

// $route['404'] = 'ErrorController/index';


$route['dashboard'] = 'DashboardController/Dashboard';


$route['monitor/internship'] = 'InternshipController/LoadStudentMasterlist';


$route['manage/students'] = 'StudentController/LoadStudentMasterlist';
$route['manage/students/(:any)/(:any)'] = 'StudentController/LoadStudentMasterlist/$1/$2';

$route['student/register'] = 'StudentController/RegisterStudent';
$route['student/edit/(:any)'] = 'StudentController/UpdateStudent/$1';
$route['student/view/(:any)'] = 'StudentController/ViewStudent/$1';
$route['student/add'] = 'StudentController/Create';
$route['student/update'] = 'StudentController/Update';
$route['student/change'] = 'StudentController/ChangeStatus';

$route['manage/documents'] = 'DocumentController/LoadMasterlist';
$route['document/register'] = 'DocumentController/RegisterDocument';
$route['document/edit/(:any)'] = 'DocumentController/UpdateDocument/$1';
$route['document/view/(:any)'] = 'DocumentController/ViewDocument/$1';
$route['document/add'] = 'DocumentController/Create';
$route['document/update'] = 'DocumentController/Update';
$route['document/del'] = 'DocumentController/Delete';

$route['manage/companies'] = 'CompanyController/LoadMasterlist';

$route['manage/accounts'] = 'UserController/LoadUserMasterlist';

$route['profile'] = 'StudentAccountController/LoadProfile';
$route['applications'] = 'StudentAccountController/LoadMyApplications';
$route['applications/register'] = 'StudentAccountController/RegisterApplication';
$route['applications/records/(:any)'] = 'StudentAccountController/RegisterRecord/$1';

$route['applications/add'] = 'StudentAccountController/Create';
$route['record/add'] = 'StudentAccountController/CreateRecord';
$route['record/(:any)'] = 'StudentAccountController/ViewRecord/$1';



$route['applications/preview'] = 'StudentAccountController/LoadDocumentRecord';
$route['applications/edit/(:any)'] = 'StudentAccountController/UpdateApplication/$1';

$route['requests/documents/(:any)'] = 'RequestController/LoadRequests/$1';
$route['requests/documents/(:any)/(:any)'] = 'RequestController/LoadRequests/$1/$2';
$route['requests/add'] = 'StudentAccountController/CreateRequest';

$route['login'] = 'AuthController/LoginPage';
$route['login/auth'] = 'AuthController/Authenticate';
$route['logout'] = 'AuthController/Logout';

$route['requests'] = 'StudentAccountController/LoadMyRequests';
$route['documents'] = 'StudentAccountController/LoadMyDocuments';

$route['manage/requests/edit'] = 'RequestController/RequestChangeStatus';


//Generic Forms
//SECTION
$route['manage/generic/(:any)'] = 'GenericController/LoadMasterlist/$1';
$route['manage/generic/(:any)/add'] = 'GenericController/Create/$1';
$route['manage/generic/(:any)/update'] = 'GenericController/Update/$1';
$route['manage/generic/(:any)/delete'] = 'GenericController/Delete/$1';

$route['generate/print/document/(:any)'] = 'RequestController/RequestViewing/$1';