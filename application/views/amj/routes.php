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

$route['default_controller'] = "amanjaya";
$route['404_override'] = '';

/*Page*/
$route['junior-suite-room.html'] = "amanjaya/JuniorSuiteRoom";
$route['panoramic-suite-room.html'] = "amanjaya/PanoramicSuiteRoom";
$route['executive-suite-room.html'] = "amanjaya/ExecutiveSuiteRoom";
$route['large-suites-for-frequent-travelers.html'] = "amanjaya/BusinessTraveler";
$route['suite-for-honeymoon-with-heart.html'] = "amanjaya/HoneyMoon";
$route['key-west-restaurant.html'] = "amanjaya/DrinkAndDinning";
$route['le-moon-bar.html'] = "amanjaya/LeMoonBar";
$route['gallery.html'] = "amanjaya/galleryPage";
$route['gallery/honeymoon.html'] = "amanjaya/galleryHoneyMoon";
$route['gallery/drinking-and-dinning.html'] = "amanjaya/galleryDrinkingDinning";
$route['gallery/other.html'] = "amanjaya/galleryOther";

//Gallery Room Suite
$route['junior-suite-room-gallery.html'] = "amanjaya/galleryMobileJunior";
$route['panoramic-suite-room-gallery.html'] = "amanjaya/galleryMobilePanoramic";
$route['executive-suite-room-gallery.html'] = "amanjaya/galleryMobileExecutive";

/*Other*/
$route['contact.html'] = "amanjaya/Contact";
$route['booking.html'] = "amanjaya/DoBooking";

/* End of file routes.php */
/* Location: ./application/config/routes.php */