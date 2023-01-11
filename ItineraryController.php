<?php class ItineraryController{
  
  function index () {
		Views::render('itinerary.index', get_defined_vars());
	}

}