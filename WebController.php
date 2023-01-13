<?php class WebController {

	function index () {
		$itinerarys = ItineraryModel::all();
		Views::render('web.index', get_defined_vars());
	}
}