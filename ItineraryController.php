<?php class ItineraryController{
  
  function index () {
		$itinerarys = ItineraryModel::all();
		Views::render('itinerary.index', get_defined_vars());
	}

	function new () {

		Views::render('itinerary.new', get_defined_vars());
	}
	
	function create (){
		$itinerary = ItineraryModel::new($_POST);
		Views::redirect('/roteiro');
	}
	
	function show($id) {
		$itinerary = ItineraryModel::find($id);
		Views::render('itinerary.show', get_defined_vars());
		
	}
	
	function destroy ($id) {
		ItineraryModel::destroy($id);
		Views::redirect('/roteiro');
	}

	function edit ($id) {
		$itinerary = ItineraryModel::find($id);
		Views::render('itinerary.edit', get_defined_vars());
	}

	function update ($id) {
		$itinerary = ItineraryModel::find($id);
		$itinerary->update($_REQUEST);
		Views::redirect('/roteiro');
	}
	

}