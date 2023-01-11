<?php class ItineraryController{
  
  function index () {
		$itinerary = ItineraryModel::all();
		Views::render('itinerary.index', get_defined_vars());
	}

	function new () {

		Views::render('itinerary.new', get_defined_vars());
	}

	function create (){
		$itinerary = ItineraryModel::new($_POST);
		Views::redirect('/roteiros');
	}

	function destroy () {

	}

	function edit () {

	}

	function update () {

	}

}