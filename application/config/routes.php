<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

/** Front**/
$route['noticias/(:num)'] = 'noticias/index/$1';
$route['ebooks/(:num)'] = 'ebooks/index/$1';
$route['base_datos/(:num)'] = 'base_datos/index/$1';
$route['ebooks/categoria/(:num)'] = 'ebooks/categoria/$1';

/** Admin **/
$route['admin'] = "admin/admin";

$route['admin/noticias'] = "admin/admin_noticias";
$route['admin/noticias/(:num)'] = "admin/admin_noticias/edit/$1";
$route['admin/noticias/delete'] = "admin/admin_noticias/delete";
$route['admin/noticias/new'] = "admin/admin_noticias/add";
$route['admin/noticias/save'] = "admin/admin_noticias/save";


$route['admin/categorias-ebooks'] = "admin/admin_categorias";
$route['admin/categorias-ebooks/(:num)'] = "admin/admin_categorias/edit/$1";
$route['admin/categorias-ebooks/delete'] = "admin/admin_categorias/delete";
$route['admin/categorias-ebooks/new'] = "admin/admin_categorias/add";
$route['admin/categorias-ebooks/save'] = "admin/admin_categorias/save";


$route['admin/ebooks'] = "admin/admin_ebooks";
$route['admin/ebooks/(:num)'] = "admin/admin_ebooks/edit/$1";
$route['admin/ebooks/delete'] = "admin/admin_ebooks/delete";
$route['admin/ebooks/new'] = "admin/admin_ebooks/add";
$route['admin/ebooks/save'] = "admin/admin_ebooks/save";


$route['admin/basedatos'] = "admin/admin_basedatos";
$route['admin/basedatos/(:num)'] = "admin/admin_basedatos";
$route['admin/basedato/(:num)'] = "admin/admin_basedatos/edit/$1";
$route['admin/basedato/delete'] = "admin/admin_basedatos/delete";
$route['admin/basedato/new'] = "admin/admin_basedatos/add";
$route['admin/basedato/save'] = "admin/admin_basedatos/save";

$route['admin/otrosrepos'] = "admin/admin_otrosrepos";
$route['admin/otrosrepos/(:num)'] = "admin/admin_otrosrepos/edit/$1";
$route['admin/otrosrepos/delete'] = "admin/admin_otrosrepos/delete";
$route['admin/otrosrepos/new'] = "admin/admin_otrosrepos/add";
$route['admin/otrosrepos/save'] = "admin/admin_otrosrepos/save";


$route['admin/servicios'] = 'admin/admin_servicios';
$route['admin/servicios/edit'] = 'admin/admin_servicios/edit';
$route['admin/servicios/save'] = 'admin/admin_servicios/save';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
