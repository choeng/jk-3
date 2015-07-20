<?php 
namespace App\Http\Controllers;

use View;

class TourismFacilitiesController extends Controller
{
	
	function view($facility)
	{
		switch ($facility) {
			case 'hotels':
			return View::make('hotels',array('pageTitle'=>'Yogyakarta Hotels - Jogjanesia'));
			break;
			case 'restaurants':
			return View::make('restaurants',array('pageTitle'=>'Yogyakarta Restaurants - Jogjanesia'));
			break;
			default:
					# code...
			break;
		}
	}
}

?>