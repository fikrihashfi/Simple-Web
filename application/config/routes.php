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

$route['default_controller'] = 'Welcome';
$route['Home'] = 'Customer/Customer/index';
$route['User_NewAccount'] = 'Customer/Customer/CreateAccountShow';
$route['User_Login'] = 'Customer/Customer/Login';
$route['User_Register'] = 'Customer/Customer/register';
$route['User_Logout'] = 'Customer/Customer/Logout';
$route['Dashboard'] = 'Customer/Customer/Home';

$route['DeleteUser'] = 'Admin/Admin/Delete_User';
$route['Admin_NewAccount'] = 'Admin/Admin/CreateAdminShow';
$route['Admin'] = 'Admin/Admin/AdminLoginView';
$route['Admin_Login'] = 'Admin/Admin/Login';
$route['Admin_Add'] = 'Admin/Admin/AddAdminView';
$route['Admin_Register'] = 'Admin/Admin/register';
$route['Admin_Logout'] = 'Admin/Admin/logout';
$route['AddInstrument'] = 'Admin/Admin/AddInstrumentView';
$route['View_Customer'] = 'Admin/Admin/View_Customer_Data';
$route['Lihat_Instrument'] = 'Admin/Admin/ViewInstrument';
$route['Dashboard_admin'] = 'Admin/Admin/Home';
$route['View_Instrument'] = 'Admin/Admin/View_Instrument_Data';

$route['View_Booking'] = 'Instrument/Booking/view_booking';

$route['Tambah_Instrument'] = 'Admin/Admin/AddInstrument';
$route['Edit_Instrument'] = 'Admin/Admin/EditInstrument';

$route['View_Rental'] = 'Instrument/Rental/View_Rental';

$route['Our_Product'] = 'Customer/Customer/View_Product';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


